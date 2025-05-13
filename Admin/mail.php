<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

function envoyerEmail($destinataire, $sujet, $messageHTML) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ton_email@example.com';
    $mail->Password = 'mot_de_passe';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('ton_email@example.com', 'Mairie de Porto-Novo');
    $mail->addAddress($destinataire);
    $mail->Subject = $sujet;
    $mail->isHTML(true);
    $mail->Body = $messageHTML;

    return $mail->send();
}