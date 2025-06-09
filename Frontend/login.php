<?php
session_start();
require '../Backend/connexion.php';
$message = '';

// Supprimer les anciennes tentatives (> 30 min)
$pdo->prepare("DELETE FROM tentatives_connexion WHERE date_tentative < NOW() - INTERVAL 30 MINUTE")->execute();

// Compter les échecs récents de cette IP
$nb_echecs = $pdo->prepare("SELECT COUNT(*) FROM tentatives_connexion WHERE ip_address = ? AND reussie = 0");
$nb_echecs->execute([$ip]);
$echecs = $nb_echecs->fetchColumn();

if ($echecs >= 4) {
    die("🚫 Trop de tentatives échouées. Réessayez dans 30 minutes.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        if ($user['role'] === 'admin') {
          header("Location: ../admin/dashboard.php");
      } else if ($user['role'] === 'client') {
          header("Location: ../Frontend/dashboard.php");
      } else if ($user['role'] === 'personnel') {
        header("Location: ../Personnel/dashboard.php");
      }
      exit;
    } else {
      $erreur = "Identifiants incorrects.";
    }
$_SESSION['last_activity'] = time(); // Initialise le timer

$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';  // Exemple d'IP par défaut
$login_reussi = false; // ou null selon votre logique

// ... après password_verify(...)
$stmt = $pdo->prepare("INSERT INTO tentatives_connexion (ip_address, reussie) VALUES (?, ?)");
$stmt->execute([$ip, $login_reussi ? 1 : 0]);
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
        <h1><a href="#">GestArr<h6>Page de connexion</h6></a></h1>
      </div>
    </div>
  </header><!-- #header -->
 
   <main id="main">
    <div class="container">
      <section id="hero" class=" clearfix min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">CONNEXION</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous à votre compte</h5>
                    <p class="text-center small">Tapez votre nom & mot de passe</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate action="" method="post" name="login">
                    <div class="col-12">
                      <label for="yournom" class="form-label">Nom</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yournom" required>
                        <div class="invalid-feedback">Tapez notre nom svp.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Tapez votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="valider">Connexion</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous ètes nouveau ici? <a href="../Frontend/register.php">S'inscrire</a></p>
                    </div>
                    <?php if (! empty($message)) { ?>
                     <p class="errorMessage"><?php echo $message; ?></p>
                     <?php } ?>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>
</body>
</html>