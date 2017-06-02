<?php $this->layout('layout-admin', ['title'=>'Modifier les photos']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center">Modifier un album</h3>
  <form class="col-md-7 jumbotron" action="<?= $this->url('photo_edit_photos', ['id' => $photos['id']]) ?>" method="POST" enctype="multipart/form-data" id="modifdocform">
    <!-- Options pour modifier l'album -->
     <div class="form-group text-center">
        <label for="id_categorie" class="control-label">Choisir l'album à modifier :</label>
        <div>
           <select id="id_categorie" name="id_categorie" class="form-control">
              <option disabled>-- Albums --</option>
                 <option value="1" id="id_categorie" ['id_categorie'] == 1 ? 'selected' : ''; ?>Patinoire 2016</option>
                 <option value="2" id="id_categorie" ['id_categorie'] == 2 ? 'selected' : ''; ?>Album 2</option>
                 <option value="2" id="id_categorie" ['id_categorie'] == 2 ? 'selected' : ''; ?>Album 3</option>
            </select>
        </div>
    </div>
    <!-- Changer Titre -->
    <div class="form-group text-center" id="formAlbum">
          <label for="albumName" class="control-label text-center">Changer titre d'album</label>
          <input type="text" class="form-control" name="albumName" id="albumName">
    </div>
    <!-- Changer Description -->
    <div class="form-group text-center">
          <label for="photodescription" class="control-label">Changer description d'album</label>
          <textarea id="photodescription" class="form-control" name="photodescription"></textarea>
    </div>
    <!-- Ajout image -->
    <div class="form-group text-center">
    	<a href="<?= $this->assetUrl($photos['photofile']) ?>" target="_blank"><i class="material-icons">cloud_download</i></a>
          <label for="photofile" class="control-label">Ajouter photo</label>
          <input type="file" name="photofile" class="form-control" id="addphoto" value="">
    </div>
    <!-- Supprimer image -->
    <div class="form-group text-center">
      <a href="<?= $this->assetUrl($photos['photofile']) ?>" target="_blank"><i class="material-icons">cloud_download</i></a>
          <label for="photofile" class="control-label">Supprimer photo</label>
          <input type="file" name="photofile" class="form-control" id="supphoto" value="">
    </div>
    <!-- Bouton modifier -->
   <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnaddphoto">Modifier Album</button>
          </div>
    </div>
    <!-- Bouton supprimer -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-danger" id="btnsupalbum">Supprimer Album</button>
          </div>
    </div>
  </div>
  </form>
</div>
<?php $this->stop('main_content') ?>