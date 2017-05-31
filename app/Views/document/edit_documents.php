<?php $this->layout('layout-admin', ['title'=>'Modification du document']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center">Modifier le document</h3>
  <form class="col-md-7 jumbotron" action="<?= $this->url('document_edit_documents', ['id' => $documents['id']]) ?>" method="POST" enctype="multipart/form-data" id="modifdocform">
      <div class="form-group text-center" id="formdoc2">
          <label for="docname" class="control-label text-center">Titre du document</label>
          <input type="text" class="form-control" name="docname" id="docname" value="<?php echo $documents['docname']?>" required>
    </div>
    <div class="form-group text-center">
          <label for="docdescription" class="control-label">Description du document</label>
          <textarea id="docdescription" class="form-control" name="docdescription"><?php echo $documents['docdescription']?></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_categorie" class="control-label">Catégorie de document</label>
        <div>
           <select id="id_categorie" name="id_categorie" class="form-control">
              <option disabled>-- Sélectionner un type de doc --</option>
                 <option value="1" id="id_categorie" <?= $documents['id_categorie'] == 1 ? 'selected' : ''; ?>>Document principal</option>
                 <option value="2" id="id_categorie" <?= $documents['id_categorie'] == 2 ? 'selected' : ''; ?>>Document de sortie</option>
            </select>
        </div>
    </div>
    <!-- Ajout fichier -->
    <div class="form-group text-center">
    	<a href="<?= $this->assetUrl($documents['docfile']) ?>" target="_blank"><i class="material-icons">cloud_download</i></a>
          <label for="docfile" class="control-label">Fichier</label>
          <input type="file" name="docfile" class="form-control" id="docfile" value="">
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

