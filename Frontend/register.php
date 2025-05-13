<?php
  session_start();
  require('../Backend/connexion.php');

  if (isset($_POST['send'])){

  if (!empty($_POST['username']) AND  !empty($_POST['email']) AND !empty($_POST['password']) ){
    // récupérer le username d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $username = stripslashes($_POST['username']);
    // $username = mysqli_real_escape_string($conn, $username); 
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $email = stripslashes($_POST['email']);
    // $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $password =password_hash($_POST['password'],PASSWORD_DEFAULT);
    // $password = mysqli_real_escape_string($conn, $password);
    //requéte SQL + mot de passe crypté
     
      $query = $pdo->prepare("INSERT into users (username, email, password) VALUES (?,?,?)");
      $query->execute([$username,$email,$password]);

      $recup_user = $pdo->prepare("SELECT username, email FROM users WHERE username=? AND email = ?");
      $recup_user->execute([$username,$email]);
      $recup = $recup_user->fetch();
       $_SESSION['auth'] = true;
      $_SESSION['username'] = $recup['username'];
      $_SESSION['email'] = $recup['email'];
     
      header('Location:../Frontend/login.php');
     
    }else{
      $res="Veuillez completer tous les champs";
    }
  } 
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GESTArr</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
    if(isset($res)){
      echo ' 
      <script>
      alert(\''.$res.'\')
      </script>
      ';
    }
    
    ?>
<main id="main">
    <div class="container">
      <section id="hero" class=" clearfix min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">INSCRIPTION</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                    <p class="text-center small">Entrez vos données personnelles pour créer un compte</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate method="POST">

                  <div class="col-12">
                      <label for="yourusername" class="form-label">username d'utilisateur</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourusername" >
                        <div class="invalid-feedback">Veuillez choisir le username d'utilisateur.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Ton mail</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" >
                      <div class="invalid-feedback">Veuillez entrer un adresse mail validé!</div>
                    </div>
                    
                   <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                      <div class="invalid-feedback">Veuillez entrer votre mot depasse!</div>
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="send">Créer un compte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez deja un compte? <a href="../Frontend/login.php">connexion</a></p>
                    </div>
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