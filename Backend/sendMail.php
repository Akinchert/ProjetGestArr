<?php

include ('..//Backend/connexion.php'); 
require '..//vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use Endroid\QrCode\Builder\Builder;
use PHPMailer\PHPMailer\PHPMailer;

// Récupération de la demande par ID
$id= $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM reponse WHERE id = ?");
$stmt->execute([$id]);
$demande = $stmt->fetch();

if (!$demande) {
    die("Demande introuvable");
}

// Fichier PDF du citoyen
$fichier_source = '..//reponses/' . $demande['fichier_pdf'];
if (!file_exists($fichier_source)) {
    die("Fichier PDF manquant");
}

// Générer QR Code
$code = "CODE-" . $demande['numero_suivi'];
$lien = "https://mairie-porto-novo.bj/verifier.php?code=$code";
$qr = Builder::create()->data($lien)->size(100)->margin(5)->build();
$qr_path = "..//tmp/qr_$code.png";
$qr->saveToFile($qr_path);

// Création PDF final
$pdf = new Fpdi();
$pdf->AddPage('P', 'A4');

// Logos
$pdf->Image('../img/mairie.png', 10, 10, 30);
$pdf->Image('../img/mairie.png', 170, 10, 30);

// QR code
$pdf->Image($qr_path, 160, 40, 30);

// Titre
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(10, 15);
$pdf->Cell(190, 10, utf8_decode("1er Arrondissement de Porto-Novo"), 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 10, utf8_decode("Document administratif - Code: $code"), 0, 1, 'C');

// Fusion du PDF utilisateur
$pageCount = $pdf->setSourceFile($fichier_source);
for ($i = 1; $i <= $pageCount; $i++) {
    $tpl = $pdf->importPage($i);
    $pdf->AddPage();
    $pdf->useTemplate($tpl);
}

// Pied de page
$pdf->SetY(-20);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, "1er Arrondissement de Porto-Novo - Bénin | www.porto-novo.bj", 0, 0, 'C');

// Enregistrement
$fichier_final = "..//pdf/demande_$code.pdf";
$pdf->Output('F', $fichier_final);

// Envoi par mail au citoyen
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'akinchert619@gmail.com';
$mail->Password = 'ddcfvkqnfxhfxhlp'; // mot de passe d'application
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('akinchert619@gmail.com', 'Mairie Porto-Novo');
$mail->addAddress($demande['email'], $demande['nom_demandeur']);
$mail->Subject = "Document administratif validé";
$mail->Body = "Bonjour " . $demande['nom_demandeur'] . ",\n\nVoici votre document en pièce jointe.\n\nCode : $code\nLien de vérification : $lien";
$mail->addAttachment($fichier_final);

$mail->send();

// Nettoyage
unlink($qr_path);

echo "Document généré et envoyé avec succès.";
header("Location: ..//Admin/dashboard.php");
?>