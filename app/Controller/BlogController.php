<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel as article;

class BlogController extends Controller {
  protected $ArticleModel;

  public function __construct(){
    $this->ArticleModel = new article;
  }

  public function addArticle(){
    if(!isset($_POST['titre'])){
      $this->show('blog/AddArticle');
    }else{
      $this->ArticleModel->insert($_POST);
      $this->redirectToRoute('blog_listArticles');
    }
  }

  public function listArticles(){
    $this->show('blog/listArticles');
  }

  public function voirArticle($id){
    $article = $this->ArticleModel->find($id);
    $this->show('show/voirArticle',['article'=>$article]);
  }
}

 ?>
