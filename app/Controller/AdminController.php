<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;

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
      $_POST['password'] = $this->auth->hashPassword($_POST['password']);
      $_POST['role'] = 'admin';
      $newUser = $this->currentUser->insert($_POST);
      $this->auth->logUserIn($newUser);
      $this->redirectToRoute('default_home');
    }
  }
  public function login(){
    $this->show('admin/login');
  }
}

 ?>
