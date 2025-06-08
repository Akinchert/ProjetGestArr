<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ./Frontend/login.php');
    exit();
}

require('..//Backend/expiration_session.php');
require ('../Backend/traitements.php');
//require ('../Backend/setting.php');
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
<?php include ('../Admin/header_admin.php');?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="../assets/img/hero-img.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>Gestion des Services d'Arrondissement<br></h2>
        <div>
          <a href="#" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#mentionsLegales">A propos</a>
          <a href="#why-us" class="btn-services scrollto">Tableau de bord</a>         
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>DESCRIPTION</h3>
          <h4><strong> Le 1er arrondissement de Porto-Novo est une subdivision administrative béninoise. Dans le cadre de la décentralisation 
            au Bénin, Il devient officiellement un arrondissement de la commune de Porto-Novo le 27 mai 2013 après la délibération et adoption par 
            l'Assemblée nationale du Bénin en sa séance du 15 février 2013 de la loi no 2013-05 du 15/02/2013 portant création, organisation, 
            attributions et fonctionnement des unités administratives locales en République du Bénin. Selon le recensement général de la population 
            et de l'habitat de la population de 2013 conduit par l'Institut national de la statistique et de l'analyse économique (INSAE), le 1er 
            arrondissement, à une superfie de 2 km2, d'une population de 33.820 habitants soit 18.405 de sexe feminin et 15.425 de sexe masculin. 
            Le nombre de quartier est de 29 et de ménages 8.282.</strong></p>

          <p>l'Arrondissement est animée par le Chef d'Arrondissement Monsieur Latif MOUBARACOU et le personnel administratif: Le Secretaire administratif, Monsieur Faïçole AKADIRI - 
          le Chef Division état civil, Keller SANDA et les collaborateurs du Secretaire </p>
        </header>
        
        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <p><strong>LISTE DES CHEF DE QUARTIER</strong></p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Ahountinkomey</a></h4>
              <p class="description">ABIDOU A.Ganiou Tel: 90919795/93235874</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Dotta</a></h4>
              <p class="description">ADANDE Firmin Tel: 97274199</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Gbassou-Bodo</a></h4>
              <p class="description">ADJIBI Lucien M. Tel: 97689768</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Adomè</a></h4>
              <p class="description">ADJOHAN Bénoit Tel: 98939776</p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Houègbo-Hlinkomè</a></h4>
              <p class="description">AIBOUKI Abdou Wabi Tel: 97694626</p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Sagbo-Kossou</a></h4>
              <p class="description">ALI Moussibaou Tel: </p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Ayétoro</a></h4>
              <p class="description">AMADOU Rabitou Tel: 96309165 </p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Houèzounmè</a></h4>
              <p class="description">AMOUSA Moussiliou Tel:96048000</p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Déguè-Gare Ganto</a></h4>
              <p class="description">ASSANI Abdou Madjidi Tel: 97575564 </p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Accron-Gogankomè</a></h4>
              <p class="description">GNAMBODE Mathias Tel: 95246576 </p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Oganla-Gare Est</a></h4>
              <p class="description">HONGAN Alain Tel: 97577975</p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Houéyogbé-Gbèdji</a></h4>
              <p class="description">HOUNKPONOU Mathias Tel:95078529/66169561</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Filla-Honnou</a></h4>
              <p class="description">HOUNSOU Isidore R. Tel: 97071687 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Vèkpa</a></h4>
              <p class="description">KILEYI David Tel: 97489883</p>
            </div>
          </div>

          <div class="col-lg-6 content order-lg-2 order-2">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Guévié-Zinkomè</a></h4>
              <p class="description">KOUAKANOU Félix Tel:97602825</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Akpassa-Oba</a></h4>
              <p class="description">LANIYAN Yéssoufou Tel: 97081261 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Adjégounlè</a></h4>
              <p class="description">NALLA Kabirou Tel: 97982636 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Lokossa</a></h4>
              <p class="description">NOUMAVO Jean-Marie Tel: 97121941 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Ayimlonfidé</a></h4>
              <p class="description">NOURENI Ismail Tel: 97984620</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Kpota-Sandodo</a></h4>
              <p class="description">AYINDE A Arimiyaou Tel: 97198552 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Sadognon-Adjégounlè</a></h4>
              <p class="description">PARAISO Suyanat Tel: 97728975 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Togoh-Adankomè</a></h4>
              <p class="description">SAIZONOU Luc Tel: 95530020</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Iléfiè</a></h4>
              <p class="description">SANNI Naliou Tel: 97687947</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Idi-Araba</a></h4>
              <p class="description">SEFOU Yacoub Tel: 97687947 </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Déguèkomey</a></h4>
              <p class="description">SEIDOU Fatihou Tel: 95317438</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Avassa-Bagoro</a></h4>
              <p class="description">SENOU Jules Tel: 96320386</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Sadognon-Woussou</a></h4>
              <p class="description">TALABI G. Victor Tel: 97881573/99112714</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Gbècon</a></h4>
              <p class="description">TANLODJOU Goussanou Tel: 93057157</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Quartier Sokomè-Toffinkomè</a></h4>
              <p class="description">TOGNOMEGNI Guy Tel: 97883799</p>
            </div>
          </div>
      </div>
  </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>TABLEAU DE BORD</h3>
          <p>Statistique des demandes de services</p>
        </header>

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Actes état-civil</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb2;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Déces</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb1;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Mariage</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb4;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Naissance</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb3;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Paternité</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb5;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Souche</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb6;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Copie simple</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $nb7;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Copie intégrale</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Patrimoine au sein du Premier Arrondissement</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-app">Administratif</li>
              <li data-filter=".filter-card">Religieux</li>
              <li data-filter=".filter-web">Artistique</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../img/arr.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Admin.</a></h4>
                <p>Siège du 1er Arrondissement</p>
                <div>
                  <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales1" title="Voir détail"><i class="bi bi-link"></i></a>                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../img/zangbeto.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="">Artistique</a></h4>
                <p>Zangbéto</p>
                <div>
                <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales2" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../img/arr.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Admin.</a></h4>
                <p>....</p>
                <div>                  
                  <a href="#" class="link-details" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../img/protestante.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Religieux</a></h4>
                <p>Eglise protestante de Porto-Novo</p>
                <div>
                <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales3" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../img/toffa.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Artistique</a></h4>
                <p>Statue du roi Toffa 1er</p>
                <div>
                <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales4" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../img/arr.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Admin.</a></h4>
                <p>....</p>
                <div>                  
                  <a href="#" class="link-details" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../img/mosquee.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Religieux</a></h4>
                <p>La grande mosquée de Porto-Novo</p>
                <div>
                <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales5" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../img/vodoun9tetes.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Religieux</a></h4>
                <p>Place vodoun à 9 têtes</p>
                <div>
                <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales6" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../img/patri.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Artistique</a></h4>
                <p>Maison de patrimoine</p>
                <div>
                <a href="#" class="link-details" data-bs-toggle="modal" data-bs-target="#mentionsLegales7" title="Voir détail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    
    <?php 
      include ('../Frontend/modal_detail.php');
      include ('../Frontend/modal_registre_service.php');
      include ('../Frontend/modal_a_propos.php');
      include ('../Frontend/modal_correspondance.php');
      include ('../Frontend/modal_service.php');
      include ('../Admin/modal_liste_demande.php');

    ?>
  </main><!-- End #main -->

  <?php include ('../Frontend/footer.php');?>

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