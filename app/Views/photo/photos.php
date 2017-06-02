<?php $this->layout('layout-admin', ['title' => 'photos']) ?>

<!-- Photo section -->
<?php $this->start('main_content') ?>
	<div class="row" id="zonenoire">
		<h3 class="text-center">Albums photo</h3>
	</div>
	
	<div><!-- Dynamic display of photos -->
		
	<h4>Photos</h4>
	
		<?php foreach ($photos as $key => $photo) {}?>

	</div>
		
<?php $this->stop('main_content') ?>
