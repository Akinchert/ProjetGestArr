<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '..//Backend/connexion.php'; // connexion à MySQL

if(isset($_POST['submit'])) {
    $email = $_POST['email']; // ID récupéré du formulaire
    $nom_demandeur = $_POST['nom_demandeur'];
    $code_suivi = $_POST['numero_suivi'];
    $service = $_POST['service'];
    $date= date('Y-m-d');;

    // Téléversement du fichier
    if (isset($_FILES['fichier_pdf']) && $_FILES['fichier_pdf']['error'] === 0) {
        $tmp_name = $_FILES['fichier_pdf']['tmp_name'];
        $nom_fichier = time() . "_" . $_FILES['fichier_pdf']['name'];
        $destination = "..//reponses/" . $nom_fichier;

        if (move_uploaded_file($tmp_name, $destination)) {
            // Insertion dans la table demande
            $stmt = $pdo->prepare("INSERT INTO reponse (numero_suivi, email, nom_demandeur, service, fichier_pdf, date_traitement, statut) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([ $code_suivi, $email, $nom_demandeur, $service, $nom_fichier, $date ,'Traité']);

            echo "Demande enregistrée avec succès.";
            header('Location: ../Admin/dashboard.php');
            exit();
             } else {
            echo "Erreur lors du téléversement du fichier.";
            header('Location: ../Admin/dashboard.php');
            exit();
        }
    } else {
        echo "Aucun fichier valide reçu.";
        header('Location: ../Admin/dashboard.php');
            exit();
    }
}

?>