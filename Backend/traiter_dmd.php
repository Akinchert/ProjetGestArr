<?php
include '..//Backend/connexion.php'; // connexion à MySQL

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '..//vendor/autoload.php';

if(isset($_POST['submitdmd'])) {
    $numero_suivi = uniqid('10H/');
    $nom_demandeur = $_POST['nom_demandeur'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';
    //$timbre = $numero_suivi'/SE/SAA/CdEC';

    if (isset($_FILES['fichier_pdf']) && $_FILES['fichier_pdf']['error'] === UPLOAD_ERR_OK) {
    $fichier_nom = uniqid() . "_" . basename($_FILES['fichier_pdf']['name']);
    // suite du traitement
} else {
    echo "Erreur : Aucun fichier PDF n’a été envoyé ou une erreur est survenue.";
    header('Location: ../Frontend/dashboard.php');
    exit();
    exit;
}

    // Gestion du fichier PDF
    $dossier = "..//f_dmd/";
    $fichier_nom = uniqid() . "_" . basename($_FILES['fichier_pdf']['name']);
    $fichier_path = $dossier . $fichier_nom;

    // Téléversement du fichier
    if (move_uploaded_file($_FILES['fichier_pdf']['tmp_name'], $fichier_path)) {
     // Insertion en base
            $stmt = $pdo->prepare("INSERT INTO demandes (numero_suivi, nom_demandeur, email, service, date_demande, fichier_pdf, statut) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute (array($numero_suivi, $nom_demandeur, $email, $service, $date_demande, $fichier_nom, $statut));
            
        } 
        // else {
        // echo "Aucun fichier valide reçu.";
        // header('Location: ..//Frontend/dashboard.php');
        // exit();
        // }
    
            //Email de l'administrateur
            $email_admin = "akinchert619@gmail.com";

            $mail = new PHPMailer(true);

            try {
            // Configuration SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'akinchert619@gmail.com';
            $mail->Password = 'ddcfvkqnfxhfxhlp'; // mot de passe d'application
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            /*** Notifier l'administrateur ***/
            $mail->setFrom('akinchert619@gmail.com', 'Plateforme de la Mairie');
            $mail->addAddress($email_admin);
            $mail->isHTML(true);
            $mail->Subject = "Nouvelle demande de service (#$numero_suivi)";
            $mail->Body = "
                <h3>Nouvelle demande de service</h3>
                <p><strong>Nom :</strong> $nom_demandeur</p>
                <p><strong>Email :</strong> $email</p>
                <p><strong>Service demandé :</strong> $service</p>
                <p><strong>Numéro de suivi :</strong> $numero_suivi</p>
                <p>Connectez-vous à l’interface administrateur pour consulter cette demande.</p>
                ";
            $mail->send();

            /*** Envoyer confirmation au citoyen ***/
            $mail->clearAddresses();
            $mail->addAddress($email);
            $mail->Subject = "Confirmation de votre demande (#$numero_suivi)";
            $mail->Body = "
                <h3>Bonjour $nom_demandeur,</h3>
                <p>Votre demande pour le service <strong>$service</strong> a bien été enregistrée.</p>
                <p><strong>Numéro de suivi :</strong> $numero_suivi</p>
                <p>Vous recevrez une notification dès qu’un agent traitera votre dossier.</p>
                <br>
                <p>Cordialement,<br>1er Arrondissement de Porto-Novo</p>
                ";
            $mail->send();

            echo ("$email, $nom_demandeur, 'Confirmation de votre demande', '
            Bonjour $nom_demandeur,<br><br>
            Votre demande \"$service\" a bien été enregistrée.<br>
            Code de suivi : <b>$numero_suivi</b>.<br><br>
            Merci pour votre confiance.<br>
            1er Arrondissement de Porto-Novo");
            $confirmation = "Votre demande a été soumise. Numéro de suivi :$numero_suivi consulter également votre compte $email";
            header('Location: ../Frontend/dashboard.php');
            exit();
            
            // echo "Emails envoyés.";
            } catch (Exception $e) {
            echo "Erreur envoi email : " . $mail->ErrorInfo;
            header('Location: ../Frontend/dashboard.php');
            exit();
            }
    
}

?>