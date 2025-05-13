<?php
require ('..//Backend/connexion.php');
//require ('..//Backend/traitements.php'); 

$servicenom = $pdo->query('SELECT nom  FROM services');
  

if(isset($_POST['submitdmd'])) {
    $numero_suivi = uniqid('DOSSIER-');
    $nom_demandeur = $_POST['nom_demandeur'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';

    $stmt = $pdo->prepare("INSERT INTO demandes (numero_suivi, nom_demandeur, email, service, date_demande, statut) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute (array($numero_suivi, $nom_demandeur, $email, $service, $date_demande, $statut));
   
    $confirmation = "Votre demande a été soumise. Numéro de suivi : <strong>$numero_suivi</strong>";
    echo "Demande soumise avec succès.";
}


$info = '';
if(isset($_POST['submitsv'])) {
    $numero = $_POST['numero'];
    $stmt = $pdo->prepare("SELECT * FROM demandes WHERE numero_suivi = ?");
    $stmt->execute([$numero]);
    $demande = $stmt->fetch();

    if ($demande) {
        $info = "Statut actuel de votre demande : <strong>" . htmlspecialchars($demande['statut']) . "</strong>";
    } else {
        $info = "<span class='text-danger'>Numéro de suivi introuvable.</span>";
    }
}

// Insertion dans le journal de suivi
$action = "Statut mis à jour à '$statut'";
$agent = "Admin"; // ou $_SESSION['user'] si login actif

$stmt2 = $pdo->prepare("INSERT INTO suivi_dossiers (id_demande, action, effectue_par) VALUES (?, ?, ?)");
$stmt2->execute(array($id, $action, $agent));
?>

