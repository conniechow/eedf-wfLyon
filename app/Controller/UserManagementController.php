<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use Model\AdminModel;
use Model\AdherentModel;
use \W\Security\StringUtils;
use Model\Globals;

class UserManagementController extends Controller {

  protected $currentUser;
  protected $auth;
  protected $utils;
  protected $mail;

  public function __construct(){
    $this->currentUser = new AdherentModel;
    $this->adminUser   = new AdminModel;
    $this->auth        = new AuthentificationModel;
    $this->utils       = new StringUtils;
    $this->mail        = new \PHPMailer();
  }

  public function inscription(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('user/inscription');
    }else{
      if($this->currentUser->emailExists($_POST['email'])){
        $this->show('dev/output',['result'=>'il existe deja']);
        //$this->show('user/inscription',['error'=>'emailExists']);
      }else{
        $_POST['password'] = $this->auth->hashPassword($_POST['password']);
        $_POST['role'] = Globals::ADHERENT;
        $_POST['token'] = $randString = $this->utils->randomString();
        $newUser = $this->currentUser->insert($_POST);
        $this->auth->logUserIn($newUser);
        $isSentEmail = $this->sendEmail($_POST['email'], $newUser['id'], $_POST['token']);
        $this->show('default/home',['message'=>'On a envoye un email pour valider ton compte' ]);
      }
    }
  }
  public function listUsers(){

    $data = array('role'=>Globals::ADHERENT);
    $usersList = $this->currentUser->search($data);
    $this->show('admin/manageUsers',['usersList'=>$usersList]);
  }
  public function listAdmins(){
    $data = array('role'=>Globals::ADMIN);
    $usersList = $this->currentUser->search($data);
    $this->show('admin/manageUsers',['usersList'=>$usersList]);
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
  public function addAdmin(){
    $_POST['role'] = Globals::ADMIN;
    $_POST['password'] = $this->auth->hashPassword($_POST['password']);
    if($newAdmin = $this->adminUser->insertAdmin($_POST)){
      $this->show('admin/manageUsers', ['newAdmin'=>$newAdmin]);
    }else{
      $this->show('admin/manageUsers', ['error'=>'incorrect']);
    }
  }
  public function deleteUser($id){
    $this->currentUser->delete($id);
    $this->listUsers();
  }
  private function sendEmail($address,$userId,$token){
    $this->mail->isSMTP();
    $this->mail->isHTML(true);
    $this->mail->Host = "smtp.gmail.com";
    $this->mail->Port = 465;
    $this->mail->SMTPAuth = true;
    $this->mail->SMTPSecure = 'ssl';
    $this->mail->Username  = "wf3lyon@gmail.com";
    $this->mail->Password = "Azerty1234";
    $this->mail->SetFrom('wf3lyon@gmail.com','BioForce3 Lyon');
    $this->mail->addAddress($address);
    $this->mail->Subject = 'EEDF Validation d\'email';
    $url = $this->generateTokenUrl($userId,$token);

    $bodyContent = '<p>Verification</p><a href="'.$url.'">'.$token.' '.$userId.'</a><p></p>';
    $this->mail->Body = $bodyContent;
    if (!$this->mail->send()) {
        return "Mailer Error: " . $this->mail->ErrorInfo;
    } else {
        return "Message sent!";
    }
  }

  private function generateTokenUrl($userId, $token){
    $url = 'http://localhost'.$this->generateUrl('admin_confirmation');
    $url .= '?id='   .$userId;
    $url .= '&token='.$token;
    return $url;
  }
}
