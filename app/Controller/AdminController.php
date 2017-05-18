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

  public function connexion(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('user/connexion');
    } else {
      $user = $this->auth->isValidLoginInfo($_POST['usernameOrEmail'], $_POST['password']);
      if($user != 0){
        $this->auth->logerUserIn($this->currentUser->find($user));
        $this->redirectToRoute('default_home');
      }else{
        $_SESSION['error'] = "Identifiant ou mot de passe incorrect";
        $this->redirectToRoute('login');
      }
    }
  }

  public function deconnexion(){
    $this->auth->logUserOut();
    $this->redirectToRoute('default_home');
  }


  public function login(){
    $this->show('admin/login');
  }
}

 ?>
