<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel as article;

class apiController extends Controller {
  protected $ArticleModel;

  public function __construct(){
    $this->ArticleModel = new article;
  }

  public function ajaxGetArticles(){
    //$this->show('api/articles');
    $data = $this->ArticleModel->findAll();
    $this->showJson($data);
  }

  public function delArticle(){
    if(!isset($_GET['id'])){
      $this->show('blog/listArticles');
    }else{
      $this->ArticleModel->delete($_GET['id']);
    }
  }
}

 ?>
