<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel as article;

class apiController extends Controller {
  protected $ArticleModel;

  public function __construct(){
    $this->ArticleModel = new article;
  }

  public function getArticles(){
    //$this->show('api/articles');
    $data = $this->ArticleModel->findAll();
    $this->showJson($data);
  }
}

 ?>
