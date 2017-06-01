<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ParticipantModel as participant;

class ParticipantController extends Controller {
	private $participantModel;

	public function __construct(){
		$this->participantModel = new participant;
	}

 	public function participants(){
 		$data = $this->participantModel->findAll();
 		//$this->allowTo('admin'); // seulement visible par l'admin
		$this->show('participant/participants', ['participants' => $data]);
	}

	// public function ajaxGetDocument(){
	// 	$data = $this->documentsModel->findAll();
	// 	foreach ($data as $key => $document) {
	// 		$data[$key]['action'] = $this->generateUrl('document_edit_documents', ['id' => $document['id']]);
	// 	}
	// 	$this->showJson($data);
	// }

	public function voir_participants(){
		$this->show('participant_participants', ['participant' => $participant]);
	}
	

	public function addParticipant(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){ //Si method GET afficher le formulaire
			//$this->findAll;
	    $this->show('participant/addParticipant');
	}else{										 
		//Si method POST envoyer les données à la bdd
		//$this->ParticipantModel->addParticipant($_POST);
		$this->participantModel->insert($_POST);
		$this->redirectToRoute('participant_addParticipant');
		//$this->show('participant/addParticipant');
	  }
	}

	public function edit_participants(){
		$this->show('document/edit_participants');
	}

	public function delete_participants(){
		$this->show('document/delete_participants');
	}


}
