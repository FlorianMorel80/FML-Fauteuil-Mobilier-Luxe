


  <main role="main">

  <?php @include 'header.php'; ?>


    <h1>Fauteuil Mobilier Luxe</h1>
    <h2>Inscription - Je suis un professionnel</h2>
    <!-- Formulaire d'inscription Professionnel -->
    <div class="container-fluid" id="blockProfessionnelRegistrationPro">
      <div class="row d-flex justify-content-center py-5">
        <form>
          <div class="form-group col-12">
            <label for="inputAddressRegistrationPro">Nom de la société*</label>
            <input type="text" class="form-control" id="inputAddressRegistrationPro">
          
          <div class="form-group">
            <label for="inputCategoryRegistrationPro">Catégorie de l'activité*</label>
            <input type="text" class="form-control" id="inputCategoryRegistrationPro">
          </div>
          <div class="form-group">
            <label for="inputSiretRegistrationPro">Numéro SIRET*</label>
            <input type="text" class="form-control" id="inputSiretRegistrationPro">
          </div>
          <div class="form-group">
            <label for="inputAddressRegistrationPro">Adresse*</label>
            <input type="text" class="form-control" id="inputAddressRegistrationPro">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCityRegistrationPro">Ville*</label>
                <input type="text" class="form-control" id="inputCityRegistrationPro">
              </div>
              <div class="form-group col-md-4">
                <label for="inputStateRegistrationPro">Pays*</label>
                <select id="inputStateRegistrationPro" class="form-control">
                  <option selected>Choose...</option>
                  <option selected>Belgique</option>
                  <option selected>France</option>
                  <option selected>Suisse</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="postalRegistrationPro">Code postal*</label>
                <input type="text" class="form-control" id="postalRegistrationPro">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmailRegistrationPro">Mail*</label>
              <input type="email" class="form-control" id="inputEmailRegistrationPro">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPasswordRegistrationPro">Mot de passe*</label>
              <input type="password" class="form-control" id="inputPasswordRegistrationPro">
            </div>
            <div class="form-group col-md-6">
              <label for="inputVerificationPasswordRegistrationPro">Valider le mot de passe*</label>
              <input type="password" class="form-control" id="inputVerificationPasswordRegistrationPro">
            </div>

          </div>
          <button type="submit" class="btn btn-primary ">Créer mon compte</button>
        </div>
        </form>
      </div>
    </div>
    <!-- Fin Formulaire d'inscription Professionnel -->

    <!-- Formulaire d'inscription Particulier -->
    <h2>Inscription - Je suis un particulier</h2>
    <!-- Formulaire d'inscription Professionnel -->
    <div class="container-fluid" id="blockParticulierRegistration">
      <div class="row d-flex justify-content-center py-5">
        <form>
          
          <div class="form-group col-12">
            <label for="inputAddressRegistrationPart">Adresse*</label>
            <input type="text" class="form-control" id="inputAddressRegistrationPart">
          
          <div class="form-group">
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCityRegistrationPart">Ville*</label>
                <input type="text" class="form-control" id="inputCityRegistrationPart">
              </div>
              <div class="form-group col-md-4">
                <label for="inputStateRegistrationPart">Pays*</label>
                <select id="inputStateRegistrationPart" class="form-control">
                  <option selected>Choose...</option>
                  <option selected>Belgique</option>
                  <option selected>France</option>
                  <option selected>Suisse</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="postalRegistrationPart">Code postal*</label>
                <input type="text" class="form-control" id="postalRegistrationPart">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmailRegistrationPart">Mail*</label>
              <input type="email" class="form-control" id="inputEmailRegistrationPart">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPasswordRegistrationPart">Mot de passe*</label>
              <input type="password" class="form-control" id="inputPasswordRegistrationPart">
            </div>
            <div class="form-group col-md-6">
              <label for="inputVerificationPasswordPart">Valider le mot de passe*</label>
              <input type="password" class="form-control" id="inputVerificationPasswordPart">
            </div>

          </div>
        
          <button type="submit" class="btn btn-primary">Créer mon compte</button>
        </div>
        </form>
      </div>
      
    </div>
    <!-- Fin de formulaire d'inscription Particulier -->

    <div class="container py-3 d-flex justify-content-center">
      <div class="row">
        <div class="modal fade bg-dark" id="contact" tabindex="-1" aria-labelledby="ContactLabel" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="ContactLabel">Contactez-nous</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                </button>
              </div>
              <div class="modal-body d-flex justify-content-center">
                <section id="BlocContact">
                  <div id="formulaire">
                    <form action="contact.php" method="POST">
                      <fieldset ">
                      <legend>Laissez-nous votre message</legend>

                      <ol>
                        <li>
                          <input type=" radio " name=" sexe " id=" madame " value=" Madame " required>
                          <label for=" madame ">Madame</label>
                          <input type=" radio " name=" sexe " id=" monsieur " value=" Monsieur " required>
                          <label for=" monsieur ">Monsieur</label>
                        <li>
                          <label for=" nom "></label>
                          <input type=" text " name=" nom " id=" nom " placeholder=" Nom " required />
                        </li>
                        <li>
                          <label for=" prenom "></label>
                          <input type=" text " name=" prenom " id=" prenom " placeholder=" Prénom " required />
                        </li>
                        <li>
                          <label for=" mail "></label>
                          <input type=" email " name=" mail " id=" mail " placeholder=" Adresse mail " required />
                        </li>
                      </ol>
                      <label for=" message "></label>
                      <textarea rows=" 3 " id=" message " placeholder=" Votre message " required></textarea>
                      </fieldset>
                  </form>
                </div>
              </section>
            </div>
            <div class=" modal-footer ">
              <button type=" button " class=" btn btn-primary ">Envoyer
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
  <?php @include 'footer.php' ?>