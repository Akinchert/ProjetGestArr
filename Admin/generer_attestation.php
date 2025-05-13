<?php
require('../fpdf/fpdf.php');
include('../Backend/connexion.php');

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM demandes WHERE id = ?");
$stmt->execute([$id]);
$demande = $stmt->fetch();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,"Attestation de traitement",0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Ln(10);
$pdf->MultiCell(0,10,"Nom: {$demande['nom_demandeur']}\nDemande: {$demande['service']}\nStatut: {$demande['statut']}\nDate: {$demande['date_demande']}");

$pdf->Output("D", "Attestation_{$demande['numero_suivi']}.pdf");
exit();