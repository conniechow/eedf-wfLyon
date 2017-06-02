<?php $this->layout('layout-admin', ['title' => 'photos']) ?>

<!-- Photo section -->
<?php $this->start('main_content') ?>
	<div class="row" id="zonenoire">
		<h3 class="text-center">Albums photo</h3>
	</div>
	

	<div><!-- Dynamic display of photos -->
		
	<h4>Photos</h4>
	<img src="<?= $data[0] ?>" width="150" height="auto"/>
  <?php for($i=0;$i++;$i<51){
    print $i;
  	}

  for ($i=1; $i < 51 ; $i++) {
    $numero = $i;
    if($numero<10){
      $numero = '0'.$numero;
    }
   	print '<img src="'.$path.$data.$numero.'.jpg" width="150" height="auto"/>';
  	} ?>

	</div>	
		
<?php $this->stop('main_content') ?>
