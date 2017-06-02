﻿<?php

namespace Model;

class PhotosModel extends \W\Model\Model{
	public function slugify($text){
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

 		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  	// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

  	// trim
		$text = trim($text, '-');

  	// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

  	// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}
		return $text;
	}

	public function add_photos($args){
		
		/* Récupération de la photo */
		if(isset($_FILES['photofile'])){
			$repertoire = 'photos/'; // le répertoire de destination de l'image
			$args['photofilename'] = $_FILES['photofile']['photoname']; // le nom de la photo
			$fichier = $this->slugify($_FILES['photofile']['photoname']); // le nom de la photo slugifié
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
	public function update_photos($args, $id){
		/* Récupération de la photo */
		if(isset($_FILES['photofile']) && $_FILES['photofile']['size'] !== 0 ){
			$repertoire = 'photos/'; // le répertoire de destination de l'image
			$fichier = $this->slugify($_FILES['photofile']['name']); // le nom de la photo
			$tmpName = $_FILES['photofile']['tmp_name']; // le nom provisoire
			$args['size'] = $_FILES['photofile']['size']; // taille du fichier
			// déplacement
			if(move_uploaded_file($tmpName, 'assets/'.$repertoire.$fichier))
			{
				$args['photofile'] = $repertoire.$fichier;
				$this->update($args,$id);
			}
		}else{
			$this->update($args,$id);
		}
	}
}
