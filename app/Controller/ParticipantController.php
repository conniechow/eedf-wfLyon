<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ParticipantModel;

class ParticipantController extends Controller {
	private $participantModel;

	public function __construct(){
		$this->participantModel = new ParticipantModel;
	}

public function addParticipant(){
	if($_SERVER['REQUEST_METHOD'] == 'GET'){ //Si method GET afficher le formulaire
    $this->show('participant/addParticipant');
}else{										 //Si method POST envoyer les données à la bdd
	//$this->ParticipantModel->addParticipant($_POST);
	$this->participantModel->insert($_POST);
	$this->show('participant/addParticipant');
  }
}

public function showParticipant(){
    $this->show('participant/addParticipant');
    $this->redirectToRoute('participant_addParticipant');
  }

}