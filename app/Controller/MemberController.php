<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\MembersModel as members;

class MemberController extends Controller {
	private $membersModel;

	public function __construct(){
		$this->membersModel = new members;
	}

 	public function members(){
 		$data = $this->membersModel->findAll();
 		//$this->allowTo('admin'); // seulement visible par l'admin
		$this->show('member/members', ['members' => $data]);
	}

	// public function ajaxGetDocument(){
	// 	$data = $this->documentsModel->findAll();
	// 	foreach ($data as $key => $document) {
	// 		$data[$key]['action'] = $this->generateUrl('document_edit_documents', ['id' => $document['id']]);
	// 	}
	// 	$this->showJson($data);
	// }

	public function showMembers(){
		$this->show('member_members', ['members' => $members]);
	}
	

	public function addMember(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){ //Si method GET afficher le formulaire
			//$this->findAll;
	    $this->show('member/addMember');
	}else{										 
		//Si method POST envoyer les données à la bdd
		//$this->membersModel->addmember($_POST);
		$this->membersModel->insert($_POST);
		$this->redirectToRoute('member_addMember');
		//$this->show('participant/addMember');
	  }
	}

	public function editMembers(){
		$this->show('member/edit_members');
	}

	public function deleteMembers(){
		$this->show('member/delete_members');
	}


}
