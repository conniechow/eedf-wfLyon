<?php $this->layout('layout-admin', ['title'=>'Ajout de document']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center"> Ajout de document</h3>
  <form class="col-md-7 jumbotron text-center" action="<?= $this->url('document_add_documents') ?>" method="post" enctype="multipart/form-data" id="ajoutdocform">
      <div class="form-group text-center" id="formdoc2">
          <label for="docname" class="control-label text-center">Titre du document</label>
          <input type="text" class="form-control" name="docname" id="docname" value="" required>
    </div>
    <div class="form-group text-center">
          <label for="docdescription" class="control-label">Description du document</label>
          <textarea id="docdescription" class="form-control" name="docdescription"></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_categorie" class="control-label">Catégorie de document</label>
        <div>
           <select id="id_categorie" name="id_categorie" class="form-control">
              <option value="">-- Sélectionner un type de doc --</option>
                 <option value="1" id="id_categorie">Document principal</option>
                 <option value="2" id="id_categorie">Document de sortie</option>
            </select>
        </div>
    </div>
    <!-- Ajout fichier -->
    <div class="form-group text-center">
          <label for="docfile" class="control-label">Fichier</label>
          <input type="file" name="docfile" class="form-control" id="docfile" required>
    </div>
    <!-- -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnadddoc">Ajouter</button>
        </div>
  </div>
  </form>
</div>
<?php $this->stop('main_content') ?>

