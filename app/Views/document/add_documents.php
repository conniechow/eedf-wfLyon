<?php $this->layout('layout-admin', ['title'=>'Ajout de document']); ?>

<?php $this->start('main_content') ?>

<form class="form-horizontal" action="<?= $this->url('document_add_documents') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="docname" class="control-label">Titre du document</label>
        <input type="text" class="form-control" name="docname" id="docname" value="" required>
  </div>
  <div class="form-group">
        <label for="docdescription" class="control-label">Description du document</label>
        <textarea id="docdescription" class="form-control" name="docdescription"></textarea>
  </div>
  <div class="form-group">
      <label for="id_categorie" class="control-label">Catégorie de document</label>
         <select id="id_categorie" name="id_categorie">
            <option value="">-- Sélectionner un type de doc --</option>
               <option value="1" id="id_categorie">Document principal</option>
               <option value="2" id="id_categorie">Document de sortie</option>
      </select>
  </div>
  <!-- Ajout fichier -->
  <div class="form-group">
        <label for="docfile" class="control-label">Fichier</label>
        <input type="file" name="docfile" class="form-control" id="docfile" required>
  </div>
  <!-- -->
  <div class="form-group">
        <div class="">
            <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
            <button type="submit" class="btn btn-success">Ajouter</button>
      </div>
</div>
</form>
<?php $this->stop('main_content') ?>

