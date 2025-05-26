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
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$id]);
    $service = $stmt->fetch();

    if (!$service) {
        header('Location: services.php');
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $description = htmlspecialchars($_POST['description']);
        $prix = htmlspecialchars ($_POST['prix']);

        $stmt = $pdo->prepare("UPDATE services SET nom = ?, description = ?, prix = ? WHERE id = ?");
        if ($stmt->execute([$nom, $description, $prix, $id])) {
            header('Location: services.php');
            exit();
        } else {
            $message = "Erreur lors de la modification du service.";
        }
    }
} else {
    header('Location: services.php');
    exit();
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
          <li><a class="nav-link scrollto" href="./services.php">Retour</a></li>
          <li><a class="nav-link scrollto" href="#">Bienvenue, <?= $_SESSION['username'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

<main id="main">

<div class="container mt-4">
    <h3>Modifier le service</h3>
    <?php if ($message): ?>
        <div class="alert alert-danger"><?= $message ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Nom du service</label>
            <input type="text" name="nom" class="form-control" value="<?= htmlspecialchars($service['nom']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required><?= htmlspecialchars($service['description']) ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Prix</label>
            <textarea name="prix" class="form-control" required><?= htmlspecialchars($service['prix']) ?></textarea>
        </div>
        <!-- <div class="mb-3">
            <label class="form-label">Prix (en FCFA)</label>
            <input type="number" step="0.01" name="prix" class="form-control" required>
        </div> -->
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="services.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>
</body>
</html>