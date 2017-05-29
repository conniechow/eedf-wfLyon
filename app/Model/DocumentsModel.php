<?php

namespace Model;

class DocumentsModel extends \W\Model\Model{
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
	public function add_documents($args){
		
		/* Récupération de la photo */
		if(isset($_FILES['docfile'])){
			$repertoire = 'documents/'; // le répertoire de destination de l'image
			$fichier = $this->slugify($_FILES['docfile']['name']); // le nom de la photo
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
?>
