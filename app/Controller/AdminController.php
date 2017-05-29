<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;
use \W\Security\StringUtils;
use Model\Globals;

class AdminController extends Controller {


  protected $currentUser;
  protected $auth;

  protected $utils;

  public function __construct(){
    $this->currentUser = new UsersModel;
    $this->auth        = new AuthentificationModel;
    $this->utils       = new StringUtils;
  }

  public function dashboard(){
    $loggedUser = $this->getUser();
    if($loggedUser['role'] == 'admin'){
      $this->show('admin/dashboard');
    } else{
      $this->show('dev/output',['result'=>'no admin logged']);
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

  public function confirmation(){
    $result = array();
    if($_GET['token']){
      $result['token'] = $_GET['token'];
    }
    if($_GET['id']){
      $result['id'] = $_GET['id'];
    }
    // Update on the database
    $data = array('confirm'=>1);
    $this->currentUser->update($data, $_GET['id']);
    $utilisateur = $this->currentUser->find($_GET['id']);
    $this->show('default/home',['message'=>'Ok, compte confirme','user'=>$utilisateur ]);
  }

  public function addParticipant(){
    $this->show('admin/addParticipant');
    //$this->addParticipantModel->insert($_POST);
    //$this->redirectToRoute('admin_participant');
  }


}
 ?>
