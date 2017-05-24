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
}
