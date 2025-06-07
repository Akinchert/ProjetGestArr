<?php

require '..//vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use Endroid\QrCode\Builder\Builder;
use setasign\Fpdi\Fpdi;

// Connexion à la base de données
include ('..//Backend/connexion.php'); 

// Récupération de la demande
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM reponse WHERE id = ?");
$stmt->execute([$id]);
$demande = $stmt->fetch();

if (!$demande) die("Demande introuvable");

// Variables
$numero_suivi= $demande['numero_suivi'];
$email = $demande['email'];
$code = "CODE-" . $demande['id'];
$pdfFile = "..//reponses/" . $demande['fichier_pdf'];

// === 1. Générer QR code
$lien = "https://mairie-porto-novo.bj/verifier.php?code=$code";
$qr = Builder::create()->data($lien)->size(100)->margin(5)->build();
$qrPath = "..//hll/qr_$code.png";
$qr->saveToFile($qrPath);

// === 2. Convertir 1re page PDF en image via pdftoppm
$outputPrefix = "..//hll/qr_CODE-" . $demande['id'];
$command = "pdftoppm -jpeg -f 1 -singlefile \"$pdfFile\" \"$outputPrefix\"";
exec($command);
$imagePath = $outputPrefix . ".jpg";

// Vérification
//if (!file_exists($imagePath)) die("Erreur : image non générée");

// === 3. Générer le PDF final
$pdf = new Fpdi();
$pdf->AddPage('P', 'A4');

// Entête : Logos & QR
$pdf->Image('../img/mairie.png', 10, 10, 30);
$pdf->Image($qrPath, 170, 10, 30);
//$pdf->Image($qrPath, 165, 40, 30);

// Titre
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(10, 20);
$pdf->Cell(190, 10, utf8_decode("1er Arrondissement de Porto-Novo"), 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 8, utf8_decode("$numero_suivi"), 0, 1, 'C');

// PDF converti en image (centré)
$pdf->Image($imagePath, 20, 60, 170);

// Pied de page
// $pdf->SetY(-25);
// $pdf->SetFont('Arial', 'I', 9);
// $pdf->Cell(0, 10, utf8_decode("1er Arrondissement, Porto-Novo | www.porto-novo.bj"), 0, 0, 'C');

// Export
$finalPath = "..//pdf/demande_$code.pdf";
$pdf->Output('F', $finalPath);

// === 4. Envoi de mail avec PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'akinchert619@gmail.com';
    $mail->Password = 'ddcfvkqnfxhfxhlp';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Expéditeur et destinataire
    $mail->setFrom('akinchert619@gmail.com', 'Mairie Porto-Novo');
    $mail->addAddress($email, $demande['nom_demandeur']);

    // Pièce jointe
    $mail->addAttachment($finalPath);

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = "Notification de votre demande administrative";
    $mail->Body = "<p>Bonjour <strong>{$demande['nom_demandeur']}</strong>,</p>
    <p>Votre demande a été traitée. Vous trouverez ci-joint le document officiel portant le code : <b>$code</b>.</p>
    <p>Cordialement,<br>1er Arrondissement de Porto-Novo</p>";

    $mail->send();
    echo "Email envoyé avec succès à $email";
} catch (Exception $e) {
    echo "Erreur envoi email : {$mail->ErrorInfo}";
}

// Nettoyage temporaire
@unlink($qrPath);
@unlink($imagePath);
?>