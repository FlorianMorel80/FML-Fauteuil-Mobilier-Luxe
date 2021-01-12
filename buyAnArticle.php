



  <?php @include 'header.php'; ?>
  <main role="main">
  

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


    </main>

  <?php @include 'footer.php' ?>
    



