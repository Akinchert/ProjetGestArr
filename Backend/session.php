<?php
session_start();
if( (!isset($_SESSION["username"])) )
{
header("Location: ../Frontend/login.php");
exit(); }

include('../Backend/connexion.php');
$session =  $pdo->prepare('SELECT * FROM users WHERE id=?');
$session->execute([$_SESSION["id"]]);
$sess = $session->fetch();
?>