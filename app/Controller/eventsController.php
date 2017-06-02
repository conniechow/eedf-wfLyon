<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventsModel as events;

class EventsController extends Controller
{
	protected $eventsModel;

	public function __construct(){
		$this->eventsModel = new events;
	}

	/**
	 * Page des événements
	 **/
	public function events(){
		$this->show('events/events');
	}

	public function edit_event($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$member = $this->eventsModel->find($id);
			$this->show('events/edit_event', ['events' => $events]);
		}else{
			$this->eventsModel->update($_POST, $id);
			$this->redirectToRoute('events_edit_event');
		}
	}

	public function add_event(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
		//Si method GET afficher le formulaire
	    $this->show('events/add_event');
	}else{
		//Si method POST envoyer les données à la bdd
		$this->eventsModel->insert($_POST);
		$this->redirectToRoute('events_add_event');

	  }
	}

	// public function deleteEvent($id){
	// 	$member = $this->eventsModel->find($id);
	// 	$this->eventsModel->delete($id);
	// 	$this->redirectToRoute('events_delete_event');
	// }

}

?>
