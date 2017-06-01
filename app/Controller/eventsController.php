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
		$this->show('events/add_event');
	}

	public function edit_event(){
		$this->show('events/edit_event');
	}
}
