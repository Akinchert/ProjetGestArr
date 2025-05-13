<?php
session_start();
require '../Backend/connexion.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: ../Frontend/login.php');
    exit();
}

$service_id = isset($_GET['service_id']) ? intval($_GET['service_id']) : 0;
$service = null;
if ($service_id > 0) {
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$service_id]);
    $service = $stmt->fetch();
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
     <!-- <script src="https://www.paypal.com/sdk/js?client-id=VOTRE_CLIENT_ID_SANDBOX&currency=USD"></script> -->
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
        <h1><a href="index.php">GestArr</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../Frontend/dashboard.php">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#">Bienvenue, <?= $_SESSION['username'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about">

<div class="container mt-4">
    <h3>Paiement via PayPal</h3>
    <?php if (!$service): ?>
        <div class="alert alert-danger">Service non trouvé.</div>
    <?php else: ?>
    <form id="paypal-form">
        <input type="hidden" id="service_id" value="<?= $service['id'] ?>">
        <div class="mb-3">
            <label class="form-label">Service</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($service['nom']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Montant (USD)</label>
            <input type="number" id="montant" class="form-control" value="<?= $service['prix'] ?>" readonly>
            <!-- Exemple : 10 USD par ID (tu peux remplacer par un vrai champ "prix" dans la BDD) -->
        </div>
    </form>
    <div id="paypal-button-container"></div>
    <?php endif; ?>
</div>

<script>
paypal.Buttons({
    createOrder: function(data, actions) {
        const montant = document.getElementById('montant').value;
        return actions.order.create({
            purchase_units: [{
                amount: { value: montant }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            alert('Paiement réussi par ' + details.payer.name.given_name);
            const formData = new FormData();
            formData.append('service_id', document.getElementById('service_id').value);
            formData.append('montant', document.getElementById('montant').value);
            fetch('save_paiement.php', {
                method: 'POST',
                body: formData
            });
        });
    }
}).render('#paypal-button-container');
</script>
</body>
</html>