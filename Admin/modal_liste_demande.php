
<div class="modal fade" id="ExtralargeModal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"> <strong>Demandes administratives reçues</strong> </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                    <?php
                        $count=1;
                        $donnees= new PDO('mysql:host=localhost;dbname=gestion_services;charset=utf8', 'root', '');
                        $reponse = $donnees ->query("SELECT * FROM demandes ORDER BY id ASC");
                    ?>

              <!-- Default Table -->
              
              <table class="table">
                <thead class='table-primary'> 
                  <tr>
                          <th>Nom du demandeur </th>
                          <th>Email</th>
                          <th>Demande</th>
                          <th>Date</th>
                          <th>Piece jointe</th>
                          <th>Action</th>
                          <th>Status</th>
                          <th>Fichier réponse</th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($req=$reponse->fetch()){ 
            
                    ?>
                            <tr> 
                                <td><?= htmlspecialchars($req['nom_demandeur']) ?></td>
                                <td><?= htmlspecialchars($req['email']) ?></td>
                                <td><?= htmlspecialchars($req['service']) ?></td>
                                <td><?= htmlspecialchars($req['date_demande'])?></td>
                                <td>
                                    <?php if ($req['fichier_pdf']): ?>
                                    <a href="../f_dmd/<?= htmlspecialchars($req['fichier_pdf']) ?>" target="_blank">Voir</a>
                                    <?php else: ?>
                                    Aucun fichier
                                    <?php endif; ?>
                                </td>
                                <td>
                                  <?php if ($req['fichier_pdf']): ?>
                                  <a href="../f_dmd/<?= htmlspecialchars($req['fichier_pdf']) ?>" download>Télécharger</a>
                                  <?php endif; ?>
                                </td>
                                <td>
                                <form method="post" action="update_statut.php">
                                <input type="hidden" name="id" value="<?= $req['id'] ?>">
                                <select name="statut" onchange="this.form.submit()">
                                    <option <?= $req['statut'] == 'En attente' ? 'selected' : '' ?>>En attente</option>
                                    <option <?= $req['statut'] == 'En cours' ? 'selected' : '' ?>>En cours</option>
                                    <option <?= $req['statut'] == 'Traitée' ? 'selected' : '' ?>>Traitée</option>
                                </select>
                                </form></td>
                                <td><a class="btn btn-success btn-sm" href="../Backend/setting_dmdel.php?id=<?= $req['id'] ?>">Ajouter le fichier</a></td>
                            </tr>
                  <?php $count++; } ?>
                </tbody>
              </table><!-- End Default Table Example -->

              </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      <!-- <button type="button" class="btn btn-primary text-dark"><a href="impression_arrivee.php">Imprimer</a></button> -->
                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->


  <div class="modal fade" id="ExtralargeModal1" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"> <strong>Réclamations et doléances</strong> </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">        
                  
                    <?php
                        $count=1;
                        $donnees= new PDO('mysql:host=localhost;dbname=gestion_services;charset=utf8', 'root', '');
                        $reponse = $donnees ->query("SELECT * FROM reclamations ORDER BY date_soumission DESC");
                    ?>
              <!-- Default Table -->
              
              <table class="table">
                <thead class='table-primary'> 
                  <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                 <?php while ($r=$reponse->fetch()){ ?>
                            <tr> 
                                <td><?= htmlspecialchars($r['nom_citoyen']) ?></td>
                                <td><?= htmlspecialchars($r['email']) ?></td>
                                <td><?= $r['type_reclamation'] ?></td>
                                <td><?= nl2br(htmlspecialchars($r['message'])) ?></td>
                                <td><?= $r['date_soumission'] ?></td>
                                <td>
                                  <form method="post" action="update_statutR.php">
                                  <input type="hidden" name="id" value="<?=$r['statut'] ?>">
                                <select name="statut" onchange="this.form.submit()">
                                    <option <?= $r['statut'] == 'Non traité' ? 'selected' : '' ?>>Non traiteé</option>
                                    <option <?= $r['statut'] == 'En cours' ? 'selected' : '' ?>>En cours</option>
                                    <option <?= $r['statut'] == 'Traitée' ? 'selected' : '' ?>>Traitée</option>
                                </select>
                                </form></td>
                            </tr>
                    <?php $count++; } ?>
                </tbody>
              </table><!-- End Default Table Example -->

              </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      <!-- <button type="button" class="btn btn-primary text-dark"><a href="impression_arrivee.php">Imprimer</a></button> -->
                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->



              <div class="modal fade" id="ExtralargeModal5" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"> <strong>Liste des courriers arrivée</strong> </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">        
                  
                    <?php
                        $count=1;
                        $donnees= new PDO('mysql:host=localhost;dbname=gestion_services;charset=utf8', 'root', '');
                        $reponse = $donnees ->query("SELECT * FROM carrivee ORDER BY date DESC");
                    ?>
              <!-- Default Table -->
              
              <table class="table">
                <thead class='table-primary'> 
                  <tr>
                    <th>Date</th>
                    <th>Référence</th>
                    <th>Expediteur</th>
                    <th>Objet</th>
                  </tr>
                </thead>
                <tbody>
                 <?php while ($r=$reponse->fetch()){ ?>
                            <tr> 
                                <td><?= ($r['date']) ?></td>
                                <td><?= htmlspecialchars($r['reference']) ?></td>
                                <td><?= nl2br(htmlspecialchars($r['expediteur'])) ?></td>
                                <td><?= nl2br(htmlspecialchars($r['objet'])) ?></td>                                
                            </tr>
                    <?php $count++; } ?>
                </tbody>
              </table><!-- End Default Table Example -->

              </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      <!-- <button type="button" class="btn btn-primary text-dark"><a href="impression_arrivee.php">Imprimer</a></button> -->
                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->



              <div class="modal fade" id="ExtralargeModal6" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"> <strong>Liste des courriers départ</strong> </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">        
                  
                    <?php
                        $count=1;
                        $donnees= new PDO('mysql:host=localhost;dbname=gestion_services;charset=utf8', 'root', '');
                        $reponse = $donnees ->query("SELECT * FROM cdepart ORDER BY date_envoie DESC");
                    ?>
              <!-- Default Table -->
              
              <table class="table">
                <thead class='table-primary'> 
                  <tr>
                    <th>Date</th>
                    <th>Destinataire</th>
                    <th>Objet</th>
                  </tr>
                </thead>
                <tbody>
                 <?php while ($r=$reponse->fetch()){ ?>
                            <tr> 
                                <td><?= ($r['date_envoie']) ?></td>
                                <td><?= nl2br(htmlspecialchars($r['destinataire'])) ?></td>
                                <td><?= nl2br(htmlspecialchars($r['objet'])) ?></td>                                
                            </tr>
                    <?php $count++; } ?>
                </tbody>
              </table><!-- End Default Table Example -->

              </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      <!-- <button type="button" class="btn btn-primary text-dark"><a href="impression_arrivee.php">Imprimer</a></button> -->
                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->

