<?php
session_start();

// Durée de session en secondes (ex: 15 minutes)
$tempsExpiration = 15 * 60;

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $tempsExpiration) {
    // Session expirée : on détruit tout
    session_unset();
    session_destroy();
    header("Location: ../Frontend/login.php?timeout=1");
    exit;
}

// Mise à jour du dernier accès
$_SESSION['last_activity'] = time();
?>