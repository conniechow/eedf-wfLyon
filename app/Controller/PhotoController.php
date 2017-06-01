<?php

namespace Controller;

use \W\Controller\Controller;

class PhotoController extends Controller {

  public function __construct(){
  }
  public function showPhotos(){
  	$this->show('photo/photos');
  }
  public function addPhotos(){
	$this->show('photo/add_photos');
  }
  public function editPhotos(){
  	$this->show('photo/edit_photos');
  }
  public function albumPhotos(){
	$this->show('photo/album_example');
  }

}

?>
