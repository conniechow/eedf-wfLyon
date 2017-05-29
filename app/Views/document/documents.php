<?php $this->layout('layout-admin', ['title' => 'Documents']) ?>

<?php $this->start('main_content') ?>
	<div class="row" id="zonenoire">
		<h3 class="text-center">Documents principaux</h3>
		<div id="docprincipaux">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '1'){ ?>
				<h3><?= $document['docname'].'<br />';?> </h3>
				<h4><?= $document['docdescription'].'<br />';?></h4>
					<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>';
				}
			} 
			?>
		</div>
	</div>
	<div class="row" id="zoneblanche">
		<h3 class="text-center">Documents secondaires</h3>
		<div id="docsecondaires">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '2'){ ?>
					<h3><?= $document['docname'].'<br />';?></h3>
					<h4><?= $document['docdescription'].'<br />';?></h4>
					<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>';
				}
			} 
			?>
		</div>
	</div>
	
<?php $this->stop('main_content') ?>




