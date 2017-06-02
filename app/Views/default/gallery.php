<?php $this->layout('galleryLayout', ['title' => 'Gallery Photos des Eclaireurs d\'Annonay']) ?>
<?php $this->start('main_content') ?>
	<h2>Patinoire</h2>
  
  <img src="<?= $data[0] ?>" width="200" height="auto"/>
  <?php for($i=0;$i++;$i<51){
    print $i;
  }

  for ($i=1; $i < 51 ; $i++) {
    $numero = $i;
    if($numero<10){
      $numero = '0'.$numero;
    }
    print '<img src="'.$path.$data.$numero.'.jpg" width="200" height="auto"/>';
  } ?>

<?php $this->stop('main_content') ?>
