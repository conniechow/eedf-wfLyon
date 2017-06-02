<?php $this->layout('layout-admin', ['title' => 'Evénements']) ?>

<?php $this->start('main_content') ?>

	<div class="row">
		<h3 class="text-center">Liste des Evénements</h3>
		<div id="listmember" class="zonenoire">
			<?php foreach ($events as $key => $events) {
				?>
				<form action="#" method="post" class="form-inline">
					<div class="form-group text-center">
				        <label for="section" class="mr-sm-2">Titre :</label>
				        <input type="text" id="title" name="title" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $events['title'] ?>"/>
				        <label for="section" class="mr-sm-2">Du :</label>
				        <input type="date" id="startdate" name="startdate" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $events['startdate'] ?>"/>
				        <label for="section" class="mr-sm-2">au :</label>
				        <input type="date" id="enddate" name="enddate" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $events['enddate'] ?>"/>
				        <label for="section" class="mr-sm-2">Description</label>
				        <input type="text" id="description" name="description" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $events['description'] ?>"/>
				        <label for="section" class="mr-sm-2">Listes des participants : </label>
				        <input type="text" id="id_participant" name="id_participant" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $events['id_participant'] ?>"/>

				 		<!--<button type="submit" class="btn btn-primary">Supprimer</button> -->

            <!-- <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0"> -->

				 		<?= '
				 		<a href="'. $this->url('events_edit_event', ['id' => $events['idevent']]).'" class="btn btn-xs btn-success">Modifier</a>
            <a href="'. $this->url('events_edit_event', ['id' => $events['idevent']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer l\'événement ?\');" class="btn btn-xs btn-danger">Supprimer</a>';
?>
					</div>
				</form>
			<?php

				 }
				 ?>
		</div>
	</div>
<?php $this->stop('main_content') ?>
