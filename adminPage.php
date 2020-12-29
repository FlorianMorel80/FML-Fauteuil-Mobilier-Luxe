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
    <title>Admin page - FML - Fauteul Mobilier Luxe </title>
</head>


<body>

    <main role="main">
    <?php @include 'nav.php'; ?>


        <div class="container">
            <div class="row d-flex">

            
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