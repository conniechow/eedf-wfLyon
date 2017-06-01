<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\DocumentsModel as document;

class DocumentController extends Controller {
	protected $documentsModel;

	public function __construct(){
		$this->documentsModel = new document;
	}

 	public function documents(){
 		$data = $this->documentsModel->findAll();
 		//$this->allowTo('admin'); // seulement visible par l'admin
		$this->show('document/documents', ['documents' => $data]);
	}

	// public function ajaxGetDocument(){
	// 	$data = $this->documentsModel->findAll();
	// 	foreach ($data as $key => $document) {
	// 		$data[$key]['action'] = $this->generateUrl('document_edit_documents', ['id' => $document['id']]);
	// 	}
	// 	$this->showJson($data);
	// }

	public function voir_documents(){
		if(is_numeric($id)){
			$document = $this->documentsModel->find($id);
		}else{
			$document = $this->documentsModel->search($id);
			$document = $document[0];
		}
		$this->show('document_documents', ['documents' => $document]);
	}


	public function add_documents(){
		//$this->allowTo('admin'); // seulement visible par l'admin
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('document/add_documents');
		}else{
            // $this->documentsModel->insert($_POST);
            // $this->redirectToRoute('document_documents');                                        
            $this->documentsModel->add_documents($_POST);
            $this->redirectToRoute('document_documents');

		}
	}

	public function edit_documents($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$document = $this->documentsModel->find($id);
			$this->show('document/edit_documents', ['documents' => $document]);
		}else{
			$this->documentsModel->update_documents($_POST, $id);
			$this->redirectToRoute('document_documents');
		}
	}

	public function delete_documents($id){
		$document = $this->documentsModel->find($id);
		$this->documentsModel->delete($id);
		$chemindoc = '../public/assets/'.$document['docfile'];
		unlink($chemindoc); /* suppression de la photo */
		$this->redirectToRoute('document_documents');
	}
}

 ?>
