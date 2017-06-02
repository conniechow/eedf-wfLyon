<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PhotosModel;
class PhotoController extends Controller {

  protected $photosModel;

  public function __construct(){
    $this->photosModel = new PhotosModel;
  }
  
  public function showPhoto(){
    // Test Code for show
    if(is_numeric($id)){
      $photo = $this->photosModel->find($id);
    }else{
      $photo = $this->photosModel->search($id);
      $photo = $photo[0];
    }
  	$this->show('photo/photo');
  }

  public function photos(){
    $data = $this->photosModel->findAll();
    //$this->allowTo('admin'); // seulement visible par l'admin
    $this->show('photo/photos', ['photos' => $data]);
  }


  public function addPhotos(){
    // Test code for add
    //$this->allowTo('admin'); // seulement visible par l'admin
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('photo/add_photos');
    }else{
            // $this->photosModel->insert($_POST);
            // $this->redirectToRoute('photo_photos');                                        
            $this->photosModel->add_photos($_POST);
            $this->redirectToRoute('photo_photos');
    }
  }
}

?>
