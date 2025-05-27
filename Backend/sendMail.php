<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '..//vendor/autoload.php'; // ou include manuellement les fichiers si pas de Composer

function sendCustomMail($to, $toName, $subject, $bodyHtml) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'akinchert619@gmail.com';
        $mail->Password   = 'mot_de_passe_app';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('akinchert619@gmail.com', '1er Arrondissement de Porto-Novo');
        $mail->addAddress($to, $toName);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $bodyHtml;
        $mail->AltBody = strip_tags($bodyHtml);

        $mail->send();
    } catch (Exception $e) {
        error_log("Erreur mail : {$mail->ErrorInfo}");
    }
}