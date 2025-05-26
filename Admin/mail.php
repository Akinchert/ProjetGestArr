<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

function envoyerEmail($destinataire, $sujet, $messageHTML) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'akinchert619@gmail.com';
    $mail->Password = 'QuipeutpeupeutPlus@619';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('akinchert619@gmail.com', 'Mairie de Porto-Novo');
    $mail->addAddress($destinataire);
    $mail->Subject = $sujet;
    $mail->isHTML(true);
    $mail->Body = $messageHTML;

    return $mail->send();
}