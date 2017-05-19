<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller {

  	public function dashboard(){
    	$this->show('admin/dashboard');
  	}

 	public function documents(){
		$this->show('document/documents');
	}

	public function add_documents(){
		//$this->allowTo('admin'); // seulement visible par l'admin
		if(!isset($_POST['titre'])){
			$this->show('document/add_documents');
		}else{
			$_POST['slug'] = urlencode($this->articlesModel->slugify($_POST['titre']));
            $this->articlesModel->insert($_POST);
            $this->redirectToRoute('admin_documents');                                        
		}
	}

	public function edit_documents(){
		$this->show('document/edit_documents');
	}

	public function delete_documents(){
		$this->show('document/delete_documents');
	}
}

 ?>
