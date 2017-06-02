<?php $this->layout('layout-admin', ['title'=>'Modification d\'événement']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 id="titreElem" class="text-center">Modification de l'événement</h3>
<div id="formulaireElem">
  <div class="col-md-3"></div>
  <form class="col-md-6 jumbotron" action="<?= $this->url('events_edit_event', ['id' => $events['id']]) ?>" method="post" enctype="multipart/form-data" id="ajoutElemForm">
      <div class="form-group text-center" id="formElem2">
          <label for="title" class="control-label text-center">Titre de l'événement</label>
          <input type="text" class="form-control" name="title" id="title" value="<?php echo $events['title'] ?>" required>
      </div>

      <div class="form-group text-center" id="startdate">
          <label for="startdate" class="control-label text-center">Date de début</label>
          <input type="date" class="form-control" name="startdate" name="startdate" value="<?php echo $events['startdate'] ?>" required>
      </div>
      <div class="form-group text-center" id="enddate">
          <label for="enddate" class="control-label text-center">Date de fin</label>
          <input type="date" class="form-control" name="enddate" name="enddate" value="<?php echo $events['enddate'] ?>" required>
      </div>

      <div class="form-group text-center">
          <label for="description" class="control-label">Description de l'événement</label>
          <textarea id="description" class="form-control" name="description" value="<?php echo $events['description'] ?>"></textarea>
      </div>

      <div class="form-group text-center">
        <label for="id_participant" class="control-label text-center">Participants</label>
        <input type="text" class="form-control" name="id_participant" id="id_participant" value="<?php echo $events['id_participant'] ?>" required>
      </div>

      <div class="form-group text-center">
          <div class="">
              <button type="submit" class="btn btn-success">Modifier l'événement</button>
          </div>
      </div>
  </form>
  </div>
</div>
<?php $this->stop('main_content') ?>
