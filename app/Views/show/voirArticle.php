<?php $this->layout('layout', ['title' => $article['titre']]) ?>
<?php $this->start('main_content') ?>
<p>
  <?php echo $article['contenu'] ?>
</p>
<i><?php print $article['date']; ?></i>
<?php $this->stop('main_content') ?>
