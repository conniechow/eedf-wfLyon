<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UserModel;

class AdminController extends Controller {

  protected $currentUser;
  protected $auth;

  public function __construct(){
    $this->currentUser = new UsersModel;
    $this->auth = new AuthentificationModel;
  }

  public function dashboard(){
    $this->show('admin/dashboard');
  }
  public function inscription(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('user/inscription');
    }else{

    }
  }
  public function login(){
    $this->show('admin/login');
  }
}

 ?>
