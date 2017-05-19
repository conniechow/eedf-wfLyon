<?php $this->layout('layout-admin', ['title'=>'Ajout de document']); ?>

<?php $this->start('main_content') ?>

<form class="form-horizontal" action="<?= $this->url('admin_add_documents') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titredoc" class="control-label">Titre du document</label>
        <input type="text" class="form-control" name="titredoc" id="titredoc" value="" required>
  </div>
  <div class="form-group">
        <label for="descriptiondoc" class="control-label">Description du document</label>
        <textarea id="descriptiondoc" class="form-control" name="descriptiondoc"></textarea>
  </div>
  <!-- Ajout fichier -->
  <div class="form-group">
        <label for="documentfile" class="control-label">Fichier</label>
        <input type="file" name="documentfile" class="form-control" id="documentfile" required>
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

