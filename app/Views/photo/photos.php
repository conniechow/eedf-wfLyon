<?php $this->layout('layout-admin', ['title' => 'photos']) ?>

<?php $this->start('main_content') ?>
	<div class="row" id="zonenoire">
		<h3 class="text-center">Albums photo</h3>
		<div id="albumsphotos">
			<?php foreach ($photos as $key => $photo) {
				if($photo['id_categorie'] == '2017'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $photo['photoname'].'<br />';?> </h4>
					<h5><?= $photo['photodescription'].'<br />';?></h5>
						<?= '<a href="'. $this->assetUrl($photo['photofile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btndoc>
						<a href="'. $this->url('photo_edit_photos', ['id' => $photo['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('photo_delete_photos', ['id' => $photo['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	<div class="row" id="zoneblanche">
		<h3 class="text-center">Photos</h3>
		<div id="photos">
			<?php foreach ($photos as $key => $photo) {
				if($document['id_categorie'] == '2016'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $photo['photoname'].'<br />';?></h4>
					<h5><?= $photo['photodescription'].'<br />';?></h5>
					<?= '<a href="'. $this->assetUrl($photo['photofile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btndoc>
						<a href="'. $this->url('photo_edit_photos', ['id' => $photo['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('photo_delete_photos', ['id' => $photo['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	
<?php $this->stop('main_content') ?>

