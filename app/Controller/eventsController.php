<?php

namespace Controller;

use \W\Controller\Controller;

class eventsController extends \W\Controller\Controller{
  public function dashboard(){
    $this->show('default/events');
  }
}

?>
