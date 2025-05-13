
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
                        $reponse = $donnees ->query("SELECT * FROM demandes ORDER BY date_demande DESC");
                    ?>

              <!-- Default Table -->
              
              <table class="table">
                <thead class='table-primary'> 
                  <tr>
                          <th>Nom du demandeur </th>
                          <th>Email</th>
                          <th>Demande</th>
                          <th>Date</th>
                          <th>Status</th>
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
                                <form method="post" action="update_statut.php">
                                <input type="hidden" name="id" value="<?= $req['id'] ?>">
                                <select name="statut" onchange="this.form.submit()">
                                    <option <?= $req['statut'] == 'En attente' ? 'selected' : '' ?>>En attente</option>
                                    <option <?= $req['statut'] == 'En cours' ? 'selected' : '' ?>>En cours</option>
                                    <option <?= $req['statut'] == 'Traitée' ? 'selected' : '' ?>>Traitée</option>
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

