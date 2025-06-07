<?php
include ('..//Backend/connexion.php'); 
require '..//vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use Endroid\QrCode\Builder\Builder;
use PHPMailer\PHPMailer\PHPMailer;

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM reponse WHERE id = ?");
$stmt->execute([$id]);
$demande = $stmt->fetch();

if (!$demande) die("Demande introuvable");

$code = "CODE-" . $demande['numero_suivi'];
$lien = "https://mairie-porto-novo.bj/verifier.php?code=$code";
$qr = Builder::create()->data($lien)->size(100)->margin(5)->build();
$qrPath = "..//tmp/qr_$code.png";
$qr->saveToFile($qrPath);

// === Convertir la 1re page PDF téléversé en image (nécessite ImageMagick installé)

// Fichier PDF téléversé
$pdfFile = "..//reponses/" . $demande['fichier_pdf'];

// Dossier temporaire
$outputPrefix = "..//tmp/page_" . $demande['id'];

// Commande pdftoppm pour générer une image (1re page seulement)
$command = "pdftoppm -jpeg -f 1 -singlefile \"$pdfFile\" \"$outputPrefix\"";

// Exécuter la commande
exec($command);

// Le fichier généré sera : tmp/page_123.jpg
$imagePath = $outputPrefix . ".jpg";


$pdf = new Fpdi();
$pdf->AddPage('P', 'A4');

// Logos
$pdf->Image('..//img/mairie.png', 10, 10, 30);
$pdf->Image('..//img/mairie.png', 170, 10, 30);
$pdf->Image('..//tmp/qr_'.$demande['id'].'.png', 165, 40, 30);

// Titre
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(10, 20);
$pdf->Cell(190, 10, utf8_decode("1er Arrondissement de Porto-Novo"), 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 10, utf8_decode("Document administratif | Code: CODE-" . $demande['id']), 0, 1, 'C');

// Image du PDF au centre
$pdf->Image($imagePath, 20, 60, 170);

// Pied de page
$pdf->SetY(-25);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(0, 10, "1er Arrondissement, Porto-Novo, Bénin | www.porto-novo.bj", 0, 0, 'C');

// Export final
$cheminFinal = "pdf/demande_CODE-" . $demande['id'] . ".pdf";
$pdf->Output('F', $cheminFinal);








// $imagePDF = new Imagick();
// $imagePDF->setResolution(150, 150);
// $imagePDF->readImage($fichier_source."[0]");
// $imagePDF->setImageFormat('jpeg');
// $imagePath = "..//tmp/page1_$code.jpg";
// $imagePDF->writeImage($imagePath);
// $imagePDF->clear();
// $imagePDF->destroy();

// // === Création PDF A4 unique
// $pdf = new Fpdi();
// $pdf->AddPage('P', 'A4');

// // === Logos et entête
// $pdf->Image('../img/mairie.png', 10, 10, 30);
// $pdf->Image('../img/mairie.png', 170, 10, 30);
// $pdf->Image($qrPath, 165, 35, 30);
// $pdf->SetFont('Arial', 'B', 14);
// $pdf->SetXY(10, 20);
// $pdf->Cell(190, 10, utf8_decode("1er Arrondissement de Porto-Novo"), 0, 1, 'C');
// $pdf->SetFont('Arial', '', 10);
// $pdf->Cell(190, 8, utf8_decode("Document administratif | Code: $code"), 0, 1, 'C');

// // === PDF téléversé converti en image (centré)
// $pdf->Image($imagePath, 20, 60, 170); // ajuste Y = 60, largeur 170mm

// // === Pied de page
// $pdf->SetY(-25);
// $pdf->SetFont('Arial', 'I', 9);
// $pdf->Cell(0, 10, "Adresse : 1er Arrondissement, Porto-Novo, Bénin | www.porto-novo.bj", 0, 0, 'C');

// // === Export
// $fichier_final = "../pdf/demande_$code.pdf";
// $pdf->Output('F', $fichier_final);

// // Nettoyage
// unlink($qrPath);
// unlink($imagePath);

// echo "PDF unique généré avec succès : $fichier_final";
?>