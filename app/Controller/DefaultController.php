<?php

namespace Controller;

use \W\Controller\Controller;
use DocumentController;
use \Model\DocumentsModel as document;

class DefaultController extends Controller{
	protected $docModel;

	public function __construct(){
		$this->docModel = new document;
	}
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$loggedUser = $this->getUser();
		$this->show('default/home',['role'=>$loggedUser['role'],'user'=>$loggedUser]);
	}
	/**
	 * Page de contact
	 */
	public function contact()
	{
		$this->show('default/contact');
	}
	/**
	 * Page de cgv
	 */
	public function cgv()
	{
		$this->show('default/cgv');
	}
	/**
	 * Page de la Gallery
	 */
	public function gallery()
	{
		$data = '2016-01_EEDF_Patinoire';
		$this->show('default/gallery', ['data'=>$data,'path'=>'assets/images/']);
	}

	public function documents()
	{
		$data = $this->docModel->findAll();
		$this->show('default/documents', ['documents' => $data]);

	}
	public function voir_documents(){
		if(is_numeric($id)){
			$document = $this->docModel->find($id);
		}else{
			$document = $this->docModel->search($id);
			$document = $document[0];
		}
		$this->show('default_documents', ['documents' => $document]);
	}
	/**
	 * Page des événements
	 */
	public function events()
	{
		$this->show('events/events');

	}

	public function accueil()
	{
		$this->show('default/accueil');

	}

	public function quisommesnous()
	{
		$this->show('default/quisommesnous');

	}
}
