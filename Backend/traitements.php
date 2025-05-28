<?php
require ('..//Backend/connexion.php'); 

$servicenom = $pdo->query('SELECT nom  FROM services');
  
$dmd = $pdo->query('SELECT COUNT(*) as nombre FROM demandes');
$nb=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'Mariage'");
$nb1=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'Deces'");
$nb2=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'Paternite'");
$nb3=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'Naissance'");
$nb4=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'souche'");
$nb5=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'copieS'");
$nb6=$dmd->fetchColumn();

$dmd = $pdo->query("SELECT COUNT(*) as nombre FROM registre where service= 'copieI'");
$nb7=$dmd->fetchColumn();



require ('../Backend/sendMail.php');
if(isset($_POST['submitdmd'])) {
    $numero_suivi = uniqid('DOSSIER-');
    $nom_demandeur = $_POST['nom_demandeur'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';

    $stmt = $pdo->prepare("INSERT INTO demandes (numero_suivi, nom_demandeur, email, service, date_demande, statut) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute (array($numero_suivi, $nom_demandeur, $email, $service, $date_demande, $statut));
   

    sendCustomMail($email, $nom_demandeur, "Confirmation de votre demande", "
    Bonjour $nom_demandeur,<br><br>
    Votre demande \"$service\" a bien été enregistrée.<br>
    Code de suivi : <b>$numero_suivi</b>.<br><br>
    Merci pour votre confiance.<br>
    1er Arrondissement de Porto-Novo");
    $confirmation = "Votre demande a été soumise. Numéro de suivi :$numero_suivi consulter également votre compte $email";
    
    // $confirmation = "Votre demande a été soumise. Numéro de suivi :<strong>$numero_suivi</strong>";
    // echo "Demande soumise avec succès.";
    //$code_suivi = strtoupper(substr(uniqid(), -8));

// Envoi d'un mail de confirmation
// $to = $email;
// $subject = "Confirmation de votre demande administrative";
// $message_mail = "Bonjour $nom_demandeur,\n\n";
// $message_mail .= "Votre demande de type \"$service\" a bien été reçue.\n";
// $message_mail .= "Code de suivi : $numero_suivi\n\n";
// $message_mail .= "Nous vous informerons par mail lors du traitement.\n\nCordialement,\n1er Arrondissement de Porto-Novo";

// mail($to, $subject, $message_mail);
// $confirmation = "Votre demande a été soumise. Code de suivi : <strong>$numero_suivi</strong>";
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


$stmt = $pdo->query("SELECT * FROM reclamations ORDER BY date_soumission DESC");
$reclamations = $stmt->fetchAll();

if(isset($_POST['submitRe'])) {
    $numero_suivi = uniqid('REG.1ER.ARR/PN-');
    $nom_demandeur = $_POST['nom_demandeur'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $entite = $_POST['entite'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $observations = $_POST['observations'];

    $stmt = $pdo->prepare("INSERT INTO registre (numero_suivi, nom_demandeur, email, telephone, entite, service, date_demande, observations) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute (array($numero_suivi, $nom_demandeur,  $email, $telephone,  $entite, $service, $date_demande, $observations));
   
    $confirmation = "Votre demande a été soumise. Numéro de suivi :$numero_suivi consulter également votre numero $telephone";
    
}
    $count=1;
    $reponse = $pdo ->query("SELECT * FROM registre ORDER BY date_demande DESC");

          
?>


