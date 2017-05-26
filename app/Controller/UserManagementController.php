<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;

class UserManagementController extends Controller {

  protected $currentUser;
  protected $auth;
  protected $utils;

  public function __construct(){
    $this->currentUser = new UsersModel;
    $this->auth        = new AuthentificationModel;
  }

  public function listUsers(){

    $this->show('admin/manageUsers');
  }
  public function loginUser(){

    if($this->auth->isValidLoginInfo($_POST['email'], $_POST['password'])){
      $utilisateur = $this->currentUser->getUserByUsernameOrEmail($_POST['email']);
      $this->auth->logUserIn($utilisateur);
      $this->show('admin/manageUsers',['email'=>$_POST['email'], 'password'=>$_POST['password'], 'logged'=>$this->auth->getLoggedUser()]);
    } else {
      $this->show('admin/manageUsers', ['error'=>'incorrect']);
    }
  }
}
