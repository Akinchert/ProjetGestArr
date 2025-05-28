<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '..//vendor/autoload.php'; // ou inclure les fichiers PHPMailer

$nom = $_POST['nom_demandeur'];
$email = $_POST['email'];

// Gérer le fichier
$targetDir = "pdf/";
$filename = uniqid() . "_" . basename($_FILES["fichier_pdf"]["name"]);
$targetFile = $targetDir . $filename;

if (move_uploaded_file($_FILES["fichier_pdf"]["tmp_name"], $targetFile)) {

    // Envoi de mail avec pièce jointe
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tonemail@gmail.com';
        $mail->Password = 'mot_de_passe_app';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('tonemail@gmail.com', '1er Arrondissement');
        $mail->addAddress($email, $nom);

        $mail->isHTML(true);
        $mail->Subject = 'Réponse à votre demande';
        $mail->Body    = "Bonjour $nom,<br><br>Veuillez trouver ci-joint la réponse officielle à votre demande.<br><br>Cordialement.";
        $mail->addAttachment($targetFile, "Réponse.pdf");

        $mail->send();
        echo "Fichier envoyé avec succès au citoyen.";
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi : {$mail->ErrorInfo}";
    }

} else {
    echo "Échec du téléversement du fichier.";
}