<?php
// edit_service.php - Modifier un service
session_start();
require '../Backend/connexion.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../Frontend/login.php');
    exit();
}

$message = '';
$id = $_GET['id'] ?? 0;

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM registre WHERE id = ?");
    $stmt->execute([$id]);
    $service = $stmt->fetch();

//     if (!$service) {
//         header('Location: ../Admin/dashboard');
//         exit();
//     }

//     if(isset($_POST['submit'])) {
//         $nom_demandeur = htmlspecialchars($_POST['nom_demandeur']);
//         $email = htmlspecialchars($_POST['email']);        

//         $stmt = $pdo->prepare("UPDATE registre SET nom_demandeur = ?, emeil = ? WHERE id = ?");
//         if ($stmt->execute([$nom_demandeur, $email, $id])) {
//             header('Location: ../Admin/dashboard');
//             exit();
//         } else {
//             $message = "Erreur lors de la modification du service.";
//         }
//     }
// } else {
//     header('Location: ../Admin/dashboard');
//     exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion Services Arrondissement </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="index.php">GestArr<h6>Admin</h6></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../Admin/dashboard.php">Retour</a></li>
          <li><a class="nav-link scrollto" href="#">Bienvenue, <?= $_SESSION['username'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

<main id="main">

    <div class="container mt-4"><br><br><br><br>
    <h3><strong>Finaliser le traitement</strong></h3>
    
    <form action="./traiter_upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Code de suivi</label>
            <input type="text" name="numero_suivi" class="form-control" value="<?= htmlspecialchars($service['numero_suivi']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="<?= htmlspecialchars($service['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nom demandeur</label>
            <input type="text" name="nom_demandeur" class="form-control" value="<?= htmlspecialchars($service['nom_demandeur']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fichier PDF de réponse</label>
             <input type="file" name="fichier_pdf" accept="application/pdf" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary" name='submit'>Envoyer</button>
        
    </form>
</div>
</body>
</html>

