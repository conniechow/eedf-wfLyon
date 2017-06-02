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
 		//print_r($data[0]['id_section']);
 		$section['rank'] = $this->membersModel->findSection($data[0]['id_section']);
 		print_r($section['rank']);
 		//$this->allowTo('admin'); // seulement visible par l'admin
		$this->show('member/members', ['members' => $data]);
	}

/*
	public function showMembers(){
		if(is_numeric($id)){
			$member = $this->membersModel->find($id);
		}else{
			$member = $this->membersModel->search($id);
			//$member = $member[0];
		}
		$this->show('member_showMembers', ['members' => $member]);
	}
*/
	public function editMember($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$member = $this->membersModel->find($id);
			$this->show('member/editMember', ['members' => $member]);
		}else{
			$this->membersModel->update($_POST, $id);
			$this->redirectToRoute('member_members');
		}
	}

	public function addMember(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){ 
		//Si method GET afficher le formulaire
	    $this->show('member/addMember');
	}else{										 
		//Si method POST envoyer les données à la bdd
		$this->membersModel->insert($_POST);
		$this->redirectToRoute('member_addMember');
		//$this->show('participant/addMember');
	  }
	}

	public function deleteMembers($id){
		$member = $this->membersModel->find($id);
		$this->membersModel->delete($id);
		$this->redirectToRoute('member_members');
	}
}
