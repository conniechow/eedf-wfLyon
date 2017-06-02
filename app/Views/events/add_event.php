

<?php $this->layout('layout-admin', ['title'=>'Modification d\'événement']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 id="titreElem" class="text-center"> Modification de l'événement</h3>
<div id="formulaireElem">
  <div class="col-md-3"></div>
  <form class="col-md-6 jumbotron" action="<?= $this->url('events_add_event') ?>" method="post" enctype="multipart/form-data" id="ajoutElemForm">
      <div class="form-group text-center" id="formElem2">
          <label for="title" class="control-label text-center">Titre de l'événement</label>
          <input type="text" class="form-control" name="title" id="title" value="" required>
      </div>

      <div class="form-group text-center" id="startdate">
          <label for="startdate" class="control-label text-center">Date de début</label>
          <input type="date" class="form-control" name="startdate" name="startdate" value="" required>
      </div>
      <div class="form-group text-center" id="enddate">
          <label for="enddate" class="control-label text-center">Date de fin</label>
          <input type="date" class="form-control" name="enddate" name="enddate" value="" required>
      </div>

      <div class="form-group text-center">
          <label for="description" class="control-label">Description de l'événement</label>
          <textarea id="description" class="form-control" name="description"></textarea>
      </div>

      <div class="form-group text-center">
        <label for="id_participant" class="control-label text-center">Participants</label>
        <input type="text" class="form-control" name="id_participant" id="id_participant" value="0" required>
      </div>

      <div class="form-group text-center">
          <div class="">
              <button type="submit" class="btn btn-success" id="AddEvent">Ajouter</button>
          </div>
      </div>
  </form>
  </div>
</div>
<?php $this->stop('main_content') ?>
