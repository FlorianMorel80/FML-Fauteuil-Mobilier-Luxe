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
    <title>Mon compte - FML - Fauteul Mobilier Luxe </title>
</head>


<body>

    <main role="main">

<?php @include 'header.php'; ?>



<!-- My account -->
        <div class="container">
            <div class="row">
                <h1 class="col-12">Mon compte</h1>
                <h2 class="col-12">Paramètre du compte</h2>

    <!-- Formulaire de modification du compte Professionnel -->
                <h3 class="col-12 pt-5">Société</h3>
                <div class="container-fluid" id="blockProfessionnel">
                    <div class="row d-flex justify-content-center py-5">
                        <form>
                            <div class="form-group col-12">
                                <label for="inputAddress">Nom de la société*</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-12">
                                <label for="inputAddress">Catégorie de l'activité*</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-12">
                                <label for="inputAddress">Numéro SIRET*</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-12">
                                <button type="button" class="btn btn-primary  mt-3 mb-3">Enregistrer les
                                    modifications</button></div>
                            <h3 class="col-12 pt-5 pb-5">Adresse</h3>
                            <div class="form-group col-12">
                                <label for="inputAddress">Adresse*</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputCity">Ville*</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Pays*</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option selected>Belgique</option>
                                            <option selected>France</option>
                                            <option selected>Suisse</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="postal">Code postal*</label>
                                        <input type="text" class="form-control" id="postal">
                                    </div>
                                    <div class="form-group col-12 ">
                                        <button type="button" class="btn btn-primary mt-3 mb-3">Enregistrer les
                                            modifications</button></div>
                                </div>
                                <h3 class="col-12 pt-5 pb-5">Adresse mail</h3>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmailMyAccount">Mail*</label>
                                    <input type="email" class="form-control" id="inputEmailMyAccount">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="button" class="btn btn-primary mt-3 mb-3">Enregistrer les
                                    modifications</button></div>

                            <h3 class="col-12 pt-5 pb-5">Mot de passe</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPasswordMyAccount">Mot de passe*</label>
                                    <input type="password" class="form-control" id="inputPasswordMyAccount">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputVerificationPasswordAccount">Valider le mot de passe*</label>
                                    <input type="password" class="form-control" id="inputVerificationPasswordAccount">
                                </div>
                                <div class="form-group ">
                                    <button type="button" class="btn btn-primary mt-3 mb-3">Enregistrer les
                                        modifications</button></div>
                                    </div>
                                    <div class="form-group col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-danger mt-3">Supprimer mon compte</button></div>
                            </div>
                        </form>
                    </div>
                </div>
    <!-- Fin Formulaire de modification du compte Professionnel -->


    <!-- Formulaire de modification du compte Particulier -->
        <h2 class="col-12">Paramètre du compte</h2>
        <h3 class="col-12 pt-5">Adresse</h3>
        <!-- Formulaire d'inscription Professionnel -->
        <div class="container-fluid" id="blockParticulier">
            <div class="row d-flex justify-content-center py-5">
                <form>
                    <div class="form-group col-12">
                        <label for="inputAddressRegistration">Adresse*</label>
                        <input type="text" class="form-control" id="inputAddressRegistration">
                    </div>
                    <div class="form-group col-12">
                        <div class="form-row ">
                            <div class="form-group col-md-5">
                                <label for="inputCityRegistration">Ville*</label>
                                <input type="text" class="form-control" id="inputCityRegistration">
                            </div>
                            <form>
                                <div class="form-group col-12 col-md-4">
                                    <label for="inputStateRegistration">Pays*</label>
                                    <select id="inputStateRegistration" class="form-control">
                                        <option selected>Choose...</option>
                                        <option selected>Belgique</option>
                                        <option selected>France</option>
                                        <option selected>Suisse</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="postalRegistration">Code postal*</label>
                                    <input type="text" class="form-control" id="postalRegistration">
                                </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-3 mb-3">Enregistrer les
                            modifications</button>
                    
                    
                            <h3 class="col-12 pt-5 pb-5">Adresse mail</h3>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmailMyAccount">Mail*</label>
                                <input type="email" class="form-control" id="inputEmailMyAccount">
                            </div>
                        </div
                    <div class="form-group">
                        <button type="button" class="btn btn-primary mt-3 mb-3">Enregistrer les
                            modifications</button></div>
                    <div class="form-row">
                        <h3 class="col-12 pt-5 pb-5">Mot de passe</h3>
                        <div class="form-group col-md-6">
                            <label for="inputPasswordRegistration">Mot de passe*</label>
                            <input type="password" class="form-control" id="inputPasswordRegistration">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputVerificationPassword">Valider le mot de passe*</label>
                            <input type="password" class="form-control" id="inputVerificationPassword">
                        </div>
                        <div class="form-group ">
                            <button type="button" class="btn btn-primary mt-3 mb-3">Enregistrer les
                                modifications</button></div
                            </div>
                    </div>
                    <div class="form-group col-12  d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger mt-3 ">Supprimer mon compte</button></div
                        </div>
                </form>
                
            </div>
        </div>
    <!-- Fin Formulaire de modification du compte Particulier -->
            </div>
        </div>
        <!-- My account -->


        </main>

    <?php @include 'footer.php' ?>
