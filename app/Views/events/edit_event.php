<?php $this->layout('layout-admin', ['title'=>'Modification d\'événement']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center">Modifier L'événement</h3>
<div class="col-md-3"></div>
  <form class="col-md-6 jumbotron" action="<?= $this->url('events_add_event', ['id' => $events['id']]) ?>" method="post" enctype="multipart/form-data" id="ajoutElemForm">
      <div class="form-group text-center" id="formElem2">
          <label for="elemName" class="control-label text-center">Titre de l'événement</label>
          <input type="text" class="form-control" name="elemName" id="elemName" value="<?php echo $events['title']?>" required>
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
          <label for="elemDescription" class="control-label">Description de l'événement</label>
          <textarea id="elemDescription" class="form-control" name="elemDescription"><?php echo $events['description']?></textarea>
      </div>

      <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnadddoc">Modifier</button>
          </div>
      </div>
  </form>


</div>
<?php $this->stop('main_content') ?>
