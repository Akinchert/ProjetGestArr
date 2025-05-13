<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: ./Frontend/dashboard.php');
    exit();
} else { 
    header('Location: ./Frontend/login.php');
    exit();
}


?>
