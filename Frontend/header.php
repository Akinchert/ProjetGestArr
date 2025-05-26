<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="index.php">GestArr</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">Description</a></li>          
          <li><a class="nav-link scrollto" href="#portfolio">Patrimoine</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>          
          <li class="dropdown"><a href="#"><span></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModaldmd">Soumettre la demande</a></li>
              <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModalsv">Suivi de la demande</a></li>
              <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModalrcm">reclamation</a></li>
            </ul>
          </li>          
          <li><a class="nav-link scrollto" href="../Frontend/logout.php">Déconnexion</a></li>
          <li><a class="nav-link scrollto" href="#">Bienvenue, <?= $_SESSION['username'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->
  