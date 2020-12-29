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
  <title>Mettre en vente un meuble - FML - Fauteul Mobilier Luxe </title>
</head>


<body>

  <main role="main">

  <?php @include 'nav.php'; ?>

  

    <!-- Mettre en vente un article -->
    <h2 class="pt-5">Mettre en vente un article</h2>
    <!-- Formulaire d'inscription Professionnel -->
    <div class="container-fluid">
      <div class="row d-flex justify-content-center py-5">
        <form>
          <div class="form-group col-12">

            <label for="inputAdTitle">Titre de l'annonce*</label>
            <input type="text" class="form-control" id="inputAdTitle">

            <div class="form-group">
              <div class="form-row">

                <div class="form-group col-md-4">
                  <label for="inputCategory">Catégorie*</label>
                  <select id="inputCategory" class="form-control">
                    <option selected>Choisir...</option>
                    <option selected>Bureau</option>
                    <option selected>Chaise</option>
                    <option selected>Coiffeuse</option>
                    <option selected>Commode</option>
                    <option selected>Fauteuil</option>
                    <option selected>Table</option>
                
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputBrand">Marque*</label>
                  <select id="inputBrand" class="form-control">
                    <option selected>Choisir...</option>
                    <option selected>Eichholtz</option>
                    <option selected></option>
                    <option selected></option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDesigner">Design*</label>
                  <select id="inputDesigner" class="form-control">
                    <option selected>Choisir...</option>
                    <option selected>Art Déco</option>
                    <option selected>Baroque</option>
                    <option selected>Industriel</option>
                    <option selected>Scandinave</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12 col-md-12">
                <label for="inputDescription">Description*</label>
                <textarea name="" id="" cols="40" rows="3"></textarea>

              </div>
            </div>
            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="inputPrice">Prix*</label>
                <input type="text" class="form-control" id="inputPrice" placeholder="€">
              </div>
                <div class="form-group col-md-12">
                <label for="importPicture">Ajouter des photos</label>

                <input type="file" id="importPicture" name="importPicture" accept="image/gif, image/png, image/jpeg">
              
              </div>


            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Poster mon annonce</button>
          </div>
          
      </div>
  
    </div>
    </form>
    </div>
    </div>
    <!-- Fin de page de mise en vente d'un article -->




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