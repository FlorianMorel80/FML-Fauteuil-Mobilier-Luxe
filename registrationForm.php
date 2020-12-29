<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boostrap Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <!-- CSS Link -->

  <link rel="stylesheet" href="assets/css/animation.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Créer mon compte - FML - Fauteul Mobilier Luxe </title>
</head>

<body>


  <main role="main">

  <?php @include 'nav.php'; ?>


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

  <?php @include 'footer.php' ?>

  </main>


  <!-- Script -->
  <script src=" assets/js/main.js "></script>


  <!-- Script Bootstrap -->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "
    integrity=" sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin=" anonymous ">
  </script>
  <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "
    integrity=" sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin=" anonymous ">
  </script>
  <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js "
    integrity=" sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin=" anonymous ">
  </script>
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js "
    integrity=" sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin=" anonymous ">
  </script>

  <!--Fonction nav bar-->
  <script>
    $(document).ready(function () {
      $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(" .navbar-collapse ").hasClass(" show ");
        if (_opened === true && !clickover.hasClass(" navbar-toggler ")) {
          $(" .navbar-toggler ").click();
        }
      });
    });
  </script>

</body>

</html>