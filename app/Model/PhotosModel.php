<?php

namespace Model;

class PhotosModel extends \W\Model\Model{
	
	

	public function add_photos($args){
		
		/* Récupération de la photo */
		if(isset($_FILES['photofile'])){
			$repertoire = 'photos/'; // le répertoire de destination de l'image
			$args['photofilename'] = $_FILES['photofile']['name']; // le nom de la photo
			$fichier = $this->slugify($_FILES['photofile']['name']); // le nom de la photo slugifié
			$tmpName = $_FILES['photofile']['tmp_name']; // le nom provisoire
			$args['size'] = $_FILES['photofile']['size']; // taille du fichier
			// déplacement
			if(move_uploaded_file($tmpName, 'assets/'.$repertoire.$fichier))
			{
				$args['photofile'] = $repertoire.$fichier;
				$this->insert($args);
			}
		}
	}
}
