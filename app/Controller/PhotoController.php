<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PhotosModel;

class PhotoController extends Controller {

  protected $photosModel;

  public function __construct(){
    $this->photosModel = new PhotosModel;
  }

public function photos(){
 	$data = $this->PhotosModel->findAll();
 	//$this->allowTo('admin'); // seulement visible par l'admin
	$this->show('photo/photos', ['photos' => $data]);
	}

	// public function ajaxGetPhoto(){
	// 	$data = $this->PhotosModel->findAll();
	// 	foreach ($data as $key => $photo) {
	// 		$data[$key]['action'] = $this->generateUrl('photo_edit_photos', ['id' => $photo['id']]);
	// 	}
	// 	$this->showJson($data);
	// }

public function showPhotos(){
    $data = $this->photosModel->findAll();
    //$this->allowTo('admin'); // seulement visible par l'admin
    $this->show('photo/photos', ['photos' => $data]);
  }

public function show_photos(){
	if(is_numeric($id)){
		$photo = $this->PhotosModel->find($id);
		}else{
			$photo = $this->PhotosModel->search($id);
			$photo = $photo[0];
		}
		$this->show('photo_photos', ['photos' => $photo]);
	}

public function addPhotos(){
    // Test code for add
    //$this->allowTo('admin'); // seulement visible par l'admin
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('photo/add_photos');
    }else{                                     
      $this->photosModel->add_photos($_POST);
      $this->redirectToRoute('photo_photos');
    }

public function add_photos(){
	//$this->allowTo('admin'); // seulement visible par l'admin
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('photo/add_photos');
		}else{
            // $this->PhotosModel->insert($_POST);
            // $this->redirectToRoute('photo_photos');                                        
            $this->PhotosModel->add_photos($_POST);
            $this->redirectToRoute('photo_photos');

		}
	}

	public function edit_photos($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$photo = $this->PhotosModel->find($id);
			$this->show('photo/edit_photos', ['photos' => $photo]);
		}else{
			$this->PhotosModel->update_photos($_POST, $id);
			$this->redirectToRoute('photo_photos');
		}
	}

	public function delete_photos($id){
		$photo = $this->PhotosModel->find($id);
		$this->PhotosModel->delete($id);
		$chemindoc = '../public/assets/'.$photo['photofile'];
		unlink($chemindoc); /* suppression de la photo */
		$this->redirectToRoute('photo_photos');
	}

  }
}

?>
