<div class="row">
    <div class="col-lg-12">
        <div class="card-body my-4">
            <div class="modal fade" id="largeModal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> <strong>Soumettre une Demande</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">             
                            <form class="row g-12" action="" method="post"> <!-- General Form Elements -->
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Nom et Prénoms </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom_demandeur" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label for="validationDefault04" class="form-label">Email </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom_demandeur" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationDefault04" class="form-label">Services</label>
                                    <select class="form-select" id="validationDefault04" name="code" >
                                        <option value=""selected></option>
                                        <?php  while($list_traitement = $servicenom->fetch()) :?>            
                                        <option value="<?= $list_traitement['nom'] ?>"><?= $list_traitement['nom'] ?></option>
                                        <?php endwhile ?>
                                    </select>
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
