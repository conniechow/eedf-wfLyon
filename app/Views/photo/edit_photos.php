<?php $this->layout('layout-admin', ['title'=>'Modifier les photos']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center">Modifier le photo</h3>
  <form class="col-md-7 jumbotron" action="<?= $this->url('photo_edit_photos', ['id' => $photos['id']]) ?>" method="POST" enctype="multipart/form-data" id="modifdocform">
      <div class="form-group text-center" id="formdoc2">
          <label for="photoname" class="control-label text-center">Titre du photo</label>
          <input type="text" class="form-control" name="photoname" id="photoname" value="<?php echo $photos['photoname']?>" required>
    </div>
    <div class="form-group text-center">
          <label for="photodescription" class="control-label">Description du photo</label>
          <textarea id="photodescription" class="form-control" name="photodescription"><?php echo $photos['photodescription']?></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_categorie" class="control-label">Catégorie de photo</label>
        <div>
        Modifier pour les photos
           <select id="id_categorie" name="id_categorie" class="form-control">
              <option disabled>-- Options photo --</option>
                 <option value="1" id="id_categorie" <?= $photos['id_categorie'] == 1 ? 'selected' : ''; ?>>photo principal</option>
                 <option value="2" id="id_categorie" <?= $photos['id_categorie'] == 2 ? 'selected' : ''; ?>>photo de sortie</option>
            </select>
        </div>
    </div>
    <!-- Ajout fichier -->
    <div class="form-group text-center">
    	<a href="<?= $this->assetUrl($photos['photofile']) ?>" target="_blank"><i class="material-icons">cloud_download</i></a>
          <label for="photofile" class="control-label">Photo</label>
          <input type="file" name="photofile" class="form-control" id="docfile" value="">
    </div>
    <!-- -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnadddoc">Modifier</button>
        </div>
  </div>
  </form>
</div>
<?php $this->stop('main_content') ?>