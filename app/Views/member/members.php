<?php $this->layout('layout-admin', ['title' => 'Adhérent']) ?>

<?php $this->start('main_content') ?>
	<div class="row" id="zonenoire">
		<h1 class="text-center">Liste des adhérents</h1>
			<div>
				<div>
				<?php foreach ($members as $key => $members) {
				?>
				<form action="<?= $this->url('member_addMember')?>" method="post" class="form-inline">
				        <label for="section" class="mr-sm-2">Id Section :</label>
				        <input type="text" id="id_section" name="id_section" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['id_section'] ?>"/>
				        <label for="section" class="mr-sm-2">Nom</label>
				        <input type="text" id="name" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['name'] ?>"/>
				        <label for="section" class="mr-sm-2">Prénom</label>
				        <input type="text" id="firstname" name="firstname" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['firstname'] ?>"/>
				        <label for="section" class="mr-sm-2">Pseudo</label>
				        <input type="text" id="pseudo" name="totem" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['totem'] ?>"/>
				        <label for="section" class="mr-sm-2">Info</label>
				        <input type="text" id="infosup" name="infosup" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['infosup'] ?>"/>
				        <button type="submit" class="btn btn-primary">Modifier</button>
				 		<!--<button type="submit" class="btn btn-primary">Supprimer</button> -->
				 		<input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0">
				</form>				
				<?php
						
				 }
				 ?>

			</div>
		</div>
	</div>
<?php $this->stop('main_content') ?>