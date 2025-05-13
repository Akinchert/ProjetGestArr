
            <div class="row">
                <div class="col-lg-12">
                <div class="card-body my-4">
                <div class="modal fade" id="largeModal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> <strong>Enregistrer une demande</strong></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
             
              <form class="row g-3" action="" method="post"> <!-- General Form Elements -->
                <div class="col-md-3">
                  <label for="validationDefault04" class="form-label">Date</label>
                  <div class="input-group">
                  <input type="date" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="date" required>
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="validationDefault04" class="form-label">Nom/Prénoms demandeur</label>
                  <div class="input-group">
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="nom" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">service demandé</label>
                  <div class="input-group">
                  <select name="service" id="validationDefault04" class="form-select">
                    <option value=""></option>
                    <option value="Légalisation">Légalisation</option>
                    <option value="Souche">Souche</option>
                    <option value="Copie Intégrale">Copie Intégrale</option>
                    <option value="Paternité">Paternité</option>
                    <option value="Engagement">Engagemet</option>
                    <option value="Procuration">Procuration</option>
                    <option value="Concubinage">Concubinage</option>
                    <option value="Mariage">Mariage</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Entité traitante</label>
                  <div class="input-group">
                  <select name="entite" id="validationDefault04" class="form-select">
                    <option value=""></option>
                    <option value="CA">CA</option>
                    <option value="SAA">SAA</option>
                    <option value="Mr Killer">Mr Killer</option>
                    <option value="Mme APHITY">Mme APHITY</option>
                 </select>
                  </div>
                </div>
                <div class="col-md-8">
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

              
              