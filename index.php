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
  <title>FML - Fauteul Mobilier Luxe </title>
</head>


<body>

  <main role="main">

<?php @include 'nav.php'; ?>

<!-- Register Form -->
    <!-- Modal -->
    <div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog form-dark" role="document">
        <!--Content-->
        <div class="modal-content card card-image"
          style="background-image: url('https://cdn.pixabay.com/photo/2016/01/26/11/09/design-1162241_960_720.jpg');"
          style="opacity: 0.7;">
          <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
            <!--Header-->
            <div class="modal-header text-center pb-4">
              <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>CONNEXION</strong>
              </h3>
              <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <!--Body-->
              <div class="md-form mb-3">
                <label data-error="wrong" data-success="right" for="Form-email5">E-Mail</label>
                <input type="email" id="Form-email5" class="form-control validate white-text">

              </div>

              <div class="md-form mb-3">
                <label data-error="wrong" data-success="right" for="Form-pass5">Votre mot de passe</label>
                <input type="password" id="Form-pass5" class="form-control validate white-text">

                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">
                    <p class="font-small white-text d-flex justify-content-end"> <a href=""
                        class="green-text ml- font-weight-bold">
                        Mot de passe oublié ?</a></p>
                  </div>
                  <!--Grid column-->

                </div>
              </div>

              <!--Grid row-->
              <div class="row d-flex align-items-center mb-4">

                <!--Grid column-->
                <div class="text-center mb-3 col-md-12">
                  <button type="button" class="btn btn-warning btn-block btn-rounded z-depth-1">Se connecter</button>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12">
                  <p class="font-small white-text d-flex justify-content-end">Pas encore inscrit ? <a
                      href="registrationForm.html" class="green-text ml- font-weight-bold">
                      Créer un compte</a></p>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

            </div>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Modal -->
    <div class="text-center">
      <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#registerForm"></a>
    </div>
<!-- End Of Register Form -->




    <!-- image séparé en deux avec boutonss -->
    <!-- fin de l'image séparé en deux -->


<!-- Card Product--->
    <h1 class="text-center mt-4">Bureaux </h1>
    <div class="container">
      <div class="row d-flex justify-content-center">

        <div class="categorie-container ">
          <div class="row" id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card"
                  src="assets/img/products/bureau/bureau-militaire/bureau-militaire-vintage-de-la-royal-air-force_original.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container">
          <div class="row " id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card" src="assets/img/products/bureau/bureau-bleu/bureau_original.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container">
          <div class="row " id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card" src="assets/img/products/bureau/bureau-arrondi/bureau_arrondi.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="categorie-container ">
          <div class="row" id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card"
                  src="assets/img/products/bureau/bureau-militaire/bureau-militaire-vintage-de-la-royal-air-force_original.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container">
          <div class="row " id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card" src="assets/img/products/bureau/bureau-bleu/bureau_original.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container">
          <div class="row " id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card" src="assets/img/products/bureau/bureau-arrondi/bureau_arrondi.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container ">
          <div class="row" id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card"
                  src="assets/img/products/bureau/bureau-militaire/bureau-militaire-vintage-de-la-royal-air-force_original.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container">
          <div class="row " id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card" src="assets/img/products/bureau/bureau-bleu/bureau_original.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categorie-container">
          <div class="row " id="products">
            <a href="">
              <div class="card zoomIn ml-5 mx-5 my-5 d-flex text-center text-light bg-dark" id="card-product"
                style="width: 18rem;">
                <img class="card-img-top img-card" src="assets/img/products/bureau/bureau-arrondi/bureau_arrondi.jpg"
                  alt="">
                <div class="card-body">
                  <h2 class="card-title title-card">Bureau militaire vintage de la royale air force</h2>
                  <p class="card-text description-card">Meuble incroyable</p>
                  <h5 class="price-card">699€</h5>

                </div>
              </div>
            </a>
          </div>
        </div>


      </div>
    </div>
<!-- End of Card Product -->





    


<!-- Aide -->
    <!-- Modal -->
    <div class="container">
      <div class="row">

        <!-- Modal -->
        <div class="modal fade" id="modalHelp" tabindex="-1" role="dialog" aria-labelledby="modalHelp"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Aide</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title w-100 font-weight-bold">Comment acheter ?</h5>
                <h5 class="modal-title w-100 font-weight-bold">Comment vendre ?</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
<!-- Aide -->




<!-- Contact Form -->
    <!-- Modal -->
    <div class="container">
      <div class="row col-12">
        <div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Ecrivez-nous</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fas fa-user prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form34">Votre nom</label>
                  <input type="text" id="form34" class="form-control validate">

                </div>

                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form29">Votre mail</label>
                  <input type="email" id="form29" class="form-control validate">

                </div>

                <div class="md-form mb-5">
                  <i class="fas fa-tag prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form32">Sujet</label>
                  <input type="text" id="form32" class="form-control validate">

                </div>

                <div class="md-form">
                  <i class="fas fa-pencil prefix grey-text"></i>
                  <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                  <label data-error="wrong" data-success="right" for="form8">Votre message</label>
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-unique" id="btnContactUs">Envoyer <i
                    class="fas fa-paper-plane-o ml-1"></i></button>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center">
          <a href="" class="btn btn-default btn-rounded mb-4"></a>
        </div>
      </div>
    </div>
    <!-- Modal -->
<!-- End of Contact Form -->


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