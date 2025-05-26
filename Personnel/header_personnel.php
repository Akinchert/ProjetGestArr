<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="#">GestArr<h6>Personnel</h6></a></h1> 
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">Description</a></li>          
          <li><a class="nav-link scrollto" href="#portfolio">Patrimoine</a></li>
          <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModaldmd">Services en ligne</a></li>               
          <li class="dropdown"><a href="#"><span>Gestion</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#largeModalR">Registre de services</a></li>              
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
          <li><a class="nav-link scrollto" href="../Frontend/logout.php">Déconnexion</a></li>
          <li><a class="nav-link scrollto" href="#">Bienvenue, <?= $_SESSION['username'] ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->