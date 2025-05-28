<?php if(isset($info)){ echo'<script> alert(\''.$info.'\')</script>';  }  ?>
    <?php if(isset($confirmation)){ echo'<script> alert(\''.$confirmation.'\')</script>';  } ?>
    <?php if(isset($confirmationn)){ echo'<script> alert(\''.$confirmationn.'\')</script>';  }  ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="activite" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Enregistrer une activité du Chef d'Arrondissement</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">Date de l'activité</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="date" required>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="validationDefault04" class="form-label">Activités</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="activite" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Lieux</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="lieux" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Objet / Observations</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="observations" required>
                                    </div>
                                </div>               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="sumit" class="btn btn-primary" name='submit'>Enregistrer</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="recommandation" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Enregistrer une recommandation du Conseil d'Arrondissement</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">Date de session</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="date" required>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="validationDefault04" class="form-label">Recommandation</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="recommandation" required>
                                    </div>
                                </div>                                
                                <div class="col-md-12">
                                    <label for="validationDefault04" class="form-label">Observations</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="observations" required>
                                    </div>
                                </div>               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="sumit" class="btn btn-primary" name='submit'>Enregistrer</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>

<!-- modal enregistrement courier arrive -->
<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="arrivee1" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Enregistrer le courrier arrivée</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">Date d'arrivée</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="date_arrivee" required>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="validationDefault04" class="form-label">Référence du courrier</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="reference_courrier_arrivee" required>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <label for="validationDefault04" class="form-label">Expediteur</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="expediteur" required>
                                    </div>
                                </div>         
                                <div class="col-md-8">
                                    <label for="validationDefault04" class="form-label">Objet</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="objet" required>
                                    </div>
                                </div>           
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="sumit" class="btn btn-primary" name='submit'>Enregistrer</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>

<!-- modal enregistrement courier depart -->
<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="depart1" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Enregistrer le courrier départ</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">Date d'envoie</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="date_envoie" required>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="validationDefault04" class="form-label">Destinataire</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="destinataire" required>
                                    </div>
                                </div>                         
                                <div class="col-md-12">
                                    <label for="validationDefault04" class="form-label">Objet</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="objet" required>
                                    </div>
                                </div>           
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="sumit" class="btn btn-primary" name='submit'>Enregistrer</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="largeModaldmd" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Soumettre une Demande</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-6" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-12">
                                    <label for="validationDefault04" class="form-label">Nom et Prénoms </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom_demandeur" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Email </label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Services</label>
                                    <select class="form-select" id="validationDefault04" name="service" >
                                        <option value=""selected></option>
                                        <?php  while($list_traitement = $servicenom->fetch()) :?>            
                                        <option value="<?= $list_traitement['nom'] ?>"><?= $list_traitement['nom'] ?></option>
                                        <?php endwhile ?>
                                    </select>
                                </div>                         
                                  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="sumit" class="btn btn-primary" name='submitdmd'>Enregistrer</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="largeModalsv" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Suivi de dossier</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">    
                                                             
                            <form class="row g-6" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" name="numero" class="form-control mb-2"  id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="Numéro de suivi" required>
                                    </div>
                                </div> 
                                <div class="modal-footer">
                                    <button type="sumit" class="btn btn-primary" name='submitsv'>Suivre</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>                                    
                                </div>
                            </form><!-- End General Form Elements -->                             
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="largeModalrcm" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Formulaire de doléance, suggestion ou plainte</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">           
                            <form class="row g-6" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="nom" class="form-control mb-2"  id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="Votre nom complet" required>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control mb-2"  id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="Votre email" required>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select name="type_reclamation" class="form-control mb-2" required>
                                            <option value="">-- Choisissez un type --</option>
                                            <option>Doléance</option>
                                            <option>Suggestion</option>
                                            <option>Plaintes</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" class="form-control mb-2" rows="5" placeholder="Votre message..." required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="sumit" class="btn btn-primary" name='submitrcm'>Enregistrer</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>                                    
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="largeModalR" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Registre de services</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-6" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Nom et Prénoms </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom_demandeur" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Email</label>
                                    <div class="input-group">
                                        <input type="telephone" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault04" class="form-label">Téléphone</label>
                                    <div class="input-group">
                                        <input type="telephone" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="telephone" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">Entité traitante</label>                                    
                                    <select class="form-select" id="validationDefault04" name="entite" >           
                                        <option value="<?= $_SESSION['username'] ?>"><?= $_SESSION['username'] ?></option>                                   
                                    </select>
                                </div>  
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Services</label>
                                    <select class="form-select" id="validationDefault04" name="service">
                                        <option value="" selected></option>
                                        <option value="Mariage">Mariage</option>
                                        <option value="Deces">Décès</option>
                                        <option value="Paternite">Paternité</option>
                                        <option value="Naissance">Naissance</option>
                                        <option value="souche">Souche</option>
                                        <option value="copieS">Copie simple</option>
                                        <option value="copieI">Copie Intégrale</option>
                                    </select>
                                </div>                         
                                  <div class="col-md-12">
                                    <label for="validationDefault04" class="form-label">Observations</label>
                                    <div class="input-group">
                                        <textarea name="observations" class="form-control mb-2" rows="5" placeholder="Votre message..." required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="sumit" class="btn btn-primary" name='submitRe'onclick="return confirm(' Confirmer la demande ?')";>Enregistrer</button>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div><!-- End Extra Large Modal-->
        </div>
    </div>
</div>


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
                                    <button type="sumit" class="btn btn-primary" name='submitAj'>Ajouter</button>
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

<div class="modal fade" id="ExtralargeModal2" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> <strong>Registre des demandes</strong> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">       
                        
              <!-- Default Table -->
              
                    <table class="table">
                        <thead class='table-primary'> 
                        <tr>
                            <th>Numero Enregistrement</th>
                            <th>Entité Traitante</th>
                            <th>Demandeur</th>
                            <th>Service</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Odservation</th>
                            <th>Téléversé</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($r=$reponse->fetch()){ ?>
                            <tr> 
                                <td><?= htmlspecialchars($r['numero_suivi']) ?></td>
                                <td><?= htmlspecialchars($r['entite']) ?></td>
                                <td><?= htmlspecialchars($r['nom_demandeur']) ?></td>
                                <td><?= htmlspecialchars($r['service']) ?></td>
                                <td><?= htmlspecialchars($r['email']) ?></td>
                                <td><?= ($r['date_demande']) ?></td>
                                <td><?= nl2br(htmlspecialchars($r['observations'])) ?></td>
                                <td><a class="btn btn-success btn-sm" href="../Backend/setting.php?id=<?= $r['id'] ?>">Ajouter le fichier</a></td>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="ExtralargeModal3" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Finaliser le traitement</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                                  
                            <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Adresse e-mail du citoyen</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="email" value="<?= ($r['email']) ?>"required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Nom du citoyen</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom_demandeur" value="<?= ($r['nom_demandeur']) ?>"required>
                                    </div>
                                </div>                         
                                <div class="col-md-12">
                                    <label for="validationDefault04" class="form-label">Fichier PDF de réponse</label>
                                    <div class="input-group">
                                        <input type="file" name="fichier_pdf" accept="application/pdf" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>           
                                <div class="modal-footer">
                                    <button type="sumit" class="btn btn-primary" name='submitAj'>Envoyer</button>
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