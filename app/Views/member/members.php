<?php $this->layout('layout-admin', ['title' => 'Adhérent']) ?>

<?php $this->start('main_content') ?>

	<div class="row">
		<h3 class="text-center">Liste des adhérents</h3>
		<div id="listmember" class="zonenoire">
			<?php foreach ($members as $key => $members) {
				?>
				<form action="#" method="post" class="form-inline">
					<div class="form-group text-center">
				        <label for="section" class="mr-sm-2">Id Section :</label>
				        <input type="text" id="id_section" name="id_section" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['id_section'] ?>"/>
				        <label for="section" class="mr-sm-2">Id User :</label>
				        <input type="text" id="id_user" name="id_user" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['id_section'] ?>"/>
				        <label for="section" class="mr-sm-2">Nom</label>
				        <input type="text" id="name" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['name'] ?>"/>
				        <label for="section" class="mr-sm-2">Prénom</label>
				        <input type="text" id="firstname" name="firstname" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['firstname'] ?>"/>
				        <label for="section" class="mr-sm-2">Pseudo</label>
				        <input type="text" id="pseudo" name="totem" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['totem'] ?>"/>
				        <label for="section" class="mr-sm-2">Info</label>
				        <input type="text" id="infosup" name="infosup" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['infosup'] ?>"/>
				 		<!--<button type="submit" class="btn btn-primary">Supprimer</button> -->
				 		<input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0">
				 		<?= '
				 		<a href="'. $this->url('member_editMember', ['id' => $members['id']]).'" class="btn btn-xs btn-success">Modifier</a>
				 		<a href="'. $this->url('member_deleteMembers', ['id' => $members['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>';
?>
					</div>
				</form>				
			<?php
						
				 }
				 ?>
		</div>
	</div>
<?php $this->stop('main_content') ?>