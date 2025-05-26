<?php
// delete_service.php - Supprimer un service
session_start();
require '../Backend/connexion.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../Frontend/login.php');
    exit();
}

$id = $_GET['id'] ?? 0;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM services WHERE id = ?");
    if ($stmt->execute([$id])) {
        header('Location: services.php');
        exit();
    } else {
        echo "Erreur lors de la suppression du service.";
    }
} else {
    header('Location: services.php');
    exit();
}
?>