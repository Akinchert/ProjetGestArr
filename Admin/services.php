<?php
// services.php - Liste des services
session_start();
require '../Backend/connexion.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../Frontend/login.php');
    exit();
}

$stmt = $pdo->query("SELECT * FROM services ORDER BY id DESC");
$services = $stmt->fetchAll();

if (isset($_POST['submit'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $description = htmlspecialchars($_POST['description']);
    $prix = $_POST['prix'];

    $stmt = $pdo->prepare("INSERT INTO services (nom, description, prix) VALUES (?, ?, ?)");
    if ($stmt->execute([$nom, $description, $prix])) {
        header('Location: ../Admin/services.php');
        exit();
    } else {
        $message = "Erreur lors de l'ajout du service.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion Services Arrondissement<h6>Admin</h6></title>
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

<!-- ======= About Section ======= -->
<section id="about">
  

<div class="container mt-4">
    <h3>Liste des services</h3>
    <a class="btn btn-success btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#Ajouter">Ajouter services</a> <br><br>
    <table class="table">
            <thead class='table-primary'> 
            <tr>
                <th>ID</th>
                <th>Nom du service</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= $service['id'] ?></td>
                    <td><?= htmlspecialchars($service['nom']) ?></td>
                    <td><?= htmlspecialchars($service['description']) ?></td>
                    <td><?= htmlspecialchars($service['prix']) ?></td>
                    <td>                        
                        <a href="./edit_service.php?id=<?= $service['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="./delete_service.php?id=<?= $service['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ce service ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php if(isset($message)){ echo'<script> alert(\''.$message.'\')</script>';  }  ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="Ajouter" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Ajouter un nouveau service</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                                  
                            <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Nom du service</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Description</label>
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="description" required></textarea>
                                    </div>
                                </div>                         
                                <div class="col-md-12">
                                    <label for="validationDefault04" class="form-label">Prix (en FCFA)</label>
                                    <div class="input-group">
                                        <input type="number" step="0.01" name="prix" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>           
                                <div class="modal-footer">
                                    <button type="sumit" class="btn btn-primary" name='submit'>Ajouter</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>                                    
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>


</main><!-- End #main -->

  <?php //include ('../Frontend/footer.php');?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  

</body>

</html>


