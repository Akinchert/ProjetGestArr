<?php
include('../Backend/connexion.php');
$id = $_POST['id'];
$statut = $_POST['statut'];

$stmt = $pdo->prepare("UPDATE demandes SET statut = ? WHERE id = ?");
$stmt->execute([$statut, $id]);

header("Location: ../Admin/dashboard.php");
exit();

//...................................

include('../Admin/mail.php');

// après mise à jour du statut :
$req = $pdo->prepare("SELECT email, nom_citoyen, numero_suivi FROM demandes WHERE id = ?");
$req->execute([$id]);
$demande = $req->fetch();

$message = "Bonjour {$demande['nom_citoyen']},<br>
Le statut de votre demande <strong>{$demande['numero_suivi']}</strong> a été mis à jour à : <strong>$statut</strong>.";
envoyerEmail($demande['email'], "Mise à jour de votre dossier", $message);

{
//Insertion dans le journal de suivi
$action = "Statut mis à jour à ['$statut']";
$agent = "Admin"; // ou $_SESSION['user'] si login actif

$stmt2 = $pdo->prepare("INSERT INTO suivi_dossiers (id_demande, action, effectue_par) VALUES (?, ?, ?)");
$stmt2->execute(array($id, $action, $agent));
}
