<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="index.php">GestArr<h6>Admin</h6></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">Description</a></li>          
          <li><a class="nav-link scrollto" href="#portfolio">Patrimoine</a></li>
          <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Demande</a></li>               
          <li class="dropdown"><a href="#"><span>Gestion</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../Admin/generer_attestation.php?id=<?= $demande['id'] ?>" class="nav-link scrollto">Télécharger PDF</a></li>
              <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModal">Registre de services</a></li>
              <li><a href="../Admin/services.php">Services</a></li>
              <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#ExtralargeModal1">Reclamation</a></li>
              <!-- <li><a href="../Frontend/demande_details.php?id=<?= $demande['id'] ?>" class="nav-link scrollto">Suivi</a></li> -->
               <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModalsv">Suivi de la demande</a></li>
              <li class="dropdown"><a href="#"><span>Registre Courrier</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#"><span>Arrivée</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#" data-bs-toggle="modal" data-bs-target="#arrivee1">Enregistrer</a></li>
                      <li><a href="#">Afficher</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Départ</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#" data-bs-toggle="modal" data-bs-target="#depart1">Enregistrer</a></li>
                      <li><a href="#">Afficher</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Activité du CA</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#" data-bs-toggle="modal" data-bs-target="#activite">Enregistrer</a></li>
                  <li><a href="#">Afficher</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Recommandation du conseil</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#" data-bs-toggle="modal" data-bs-target="#recommandation">Enregistrer</a></li>
                  <li><a href="#">Afficher</a></li>
                </ul>
              </li>
              <li><a href="#">Rapport d'activité</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../Frontend/logout.php" onclick="return confirm(' Confirmer la deconnexion ?')";>Déconnexion</a></li>
          <li><a class="nav-link scrollto" href="#">Bienvenue, <?= $_SESSION['username'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->