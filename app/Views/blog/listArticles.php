<?php $this->layout('layout-admin',['title'=>'List Articles']); ?>
<?php $this->start('main_content') ?>

<h2>List Articles</h2>
<span onclick="javascript:request('http://localhost/wflyon/public/api/articles')" style="cursor:pointer;border:1px solid grey;padding:.5em;">Get articles</span>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody id="output">
    </tbody>
  </table>
<?php $this->stop('main_content') ?>
