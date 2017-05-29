<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;
use \W\Security\StringUtils;

class AdminController extends Controller {

  protected $currentUser;
  protected $auth;
  protected $mail;
  protected $utils;

  public function __construct(){
    $this->currentUser = new UsersModel;
    $this->auth        = new AuthentificationModel;
    $this->mail        = new \PHPMailer();
    $this->utils       = new StringUtils;
  }

  public function dashboard(){
    $this->show('admin/dashboard');
  }

  

}
?>
