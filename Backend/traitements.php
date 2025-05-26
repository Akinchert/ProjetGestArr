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
   
    $confirmation = "Votre demande a été soumise. Numéro de suivi :<strong>$numero_suivi</strong>";
    echo "Demande soumise avec succès.";
}

$info = '';
if(isset($_POST['submitsv'])) {
    $numero = $_POST['numero'];
    $stmt = $pdo->prepare("SELECT * FROM demandes WHERE numero_suivi = ?");
    $stmt->execute([$numero]);
    $demande = $stmt->fetch();

    if ($demande) {
        //header("Location: ..//Frontend/alert.php");
        $info = "Statut actuel de votre demande : <strong>".htmlspecialchars($demande['statut'])."</strong>";
    } else {
        $info = "<span class='text-danger'>Numéro de suivi introuvable.</span>";
    }
}

if(isset($_POST['submitrcm'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $type = $_POST['type_reclamation'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO reclamations (nom_citoyen, email, type_reclamation, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $type, $message]);

    $confirmationn = "Votre message a été soumis avec succès.";
}

if(isset($_POST['submitR'])) {
    $numero_suivi = uniqid('Reg.Arr1PN.-');
    $nom_demandeur = $_POST['nom_demandeur'];
    $telephone = $_POST['telephone'];
    $entite = $_POST['entite'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';

    $stmt = $pdo->prepare("INSERT INTO demandes (numero_suivi, nom_demandeur, email, service, date_demande, statut) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute (array($numero_suivi, $nom_demandeur, $email, $service, $date_demande, $statut));
   
    $confirmation = "Votre demande a été soumise. Numéro de suivi :<strong>$numero_suivi</strong>";
    echo "Demande soumise avec succès.";
}
?>

