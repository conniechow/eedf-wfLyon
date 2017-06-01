<?php $this->layout('layout-admin', ['title' => 'Documents']) ?>

<?php $this->start('main_content') ?>
	<div class="row" id="zonenoire">
		<h3 class="text-center">Documents principaux</h3>
		<div id="docprincipaux">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '1'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $document['docname'].'<br />';?> </h4>
					<h5><?= $document['docdescription'].'<br />';?></h5>
						<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btndoc>
						<a href="'. $this->url('document_edit_documents', ['id' => $document['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('document_delete_documents', ['id' => $document['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
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
				<div class="col-md-6 text-center">
					<h4><?= $document['docname'].'<br />';?></h4>
					<h5><?= $document['docdescription'].'<br />';?></h5>
					<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btndoc>
						<a href="'. $this->url('document_edit_documents', ['id' => $document['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('document_delete_documents', ['id' => $document['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	
<?php $this->stop('main_content') ?>
