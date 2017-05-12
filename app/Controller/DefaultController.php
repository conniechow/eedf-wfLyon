<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
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
}
