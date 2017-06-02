<?php

namespace Model;

class PhotosModel extends \W\Model\Model{
	
	

	public function add_photos($args){
		
		/* Récupération de la photo */
		if(isset($_FILES['docfile'])){
			$repertoire = 'documents/'; // le répertoire de destination de l'image
			$args['docfilename'] = $_FILES['docfile']['name']; // le nom de la photo
			$fichier = $this->slugify($_FILES['docfile']['name']); // le nom de la photo slugifié
			$tmpName = $_FILES['docfile']['tmp_name']; // le nom provisoire
			$args['size'] = $_FILES['docfile']['size']; // taille du fichier
			// déplacement
			if(move_uploaded_file($tmpName, 'assets/'.$repertoire.$fichier))
			{
				$args['docfile'] = $repertoire.$fichier;
				$this->insert($args);
			}
		}
	}
}
