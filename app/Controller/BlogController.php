<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel as article;

class BlogController extends Controller {
  protected $ArticlesModel;

  public function __construct(){
    $this->ArticlesModel = new article;
  }

  public function addArticle(){
    if(!isset($_POST['titre'])){
      $this->show('blog/AddArticle');
    }else{
      $this->ArticlesModel->insert($_POST);
      $this->redirectToRoute('blog_listArticles');
    }
  }

  public function listArticles(){
    $this->show('blog/listArticles');
  }

  public function voirArticle($id){
    if(is_numeric($idOrSlug)){
      $article = $this;
    }else{
      $article = $this->articleModel;
    }
    $article = $this->ArticlesModel->find($id);
    $this->show('show/voirArticle',['article'=>$article]);
  }
  public function editArticle($id){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $article = $this->ArticlesModel->find($id);
      $this->show('blog/editArticle', ['article' => $article]);
    } else {
      $_POST['slug'] = urlencode($this->ArticlesModel->slugify($_POST['titre']));

      $this->ArticlesModel->update($_POST, $id);
      $this->redirectToRoute('blog_listArticles');
    }
  }
}

 ?>
