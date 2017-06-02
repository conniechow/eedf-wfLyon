<?php

namespace Controller;

use \W\Controller\Controller;

class EventsController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home(){
		$this->show('default/home');
	}

	/**
	 * Page des événements
	 */
	public function events(){
		$this->show('events/events');
	}

	public function add_event(){
		//$this->allowTo('admin'); // seulement visible par l'admin
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('events/add_event');
		}else{
            // $this->eventsModel->insert($_POST);
            // $this->redirectToRoute('events_add_event');
            $this->eventsModel->add_event($_POST);
            $this->redirectToRoute('events_add_event');

		}
	}

	public function edit_event($id){
		$this->show('events/edit_event');
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$event = $this->eventsModel->find($id);
			$this->show('events/edit_event', ['events' => $event]);
		}else{
			$this->eventsModel->update_events($_POST, $id);
			$this->redirectToRoute('events_edit_event');
		}
	}



}
