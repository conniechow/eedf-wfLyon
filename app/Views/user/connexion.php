<?php $this->layout('layout-material-design', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
	<div class="container">
		<hgroup>
		<h1>Material Design Form</h1>
		<h3>Connexion</h3>
	</hgroup>
	<form method="POST" action="<?= $this->url('admin_inscription') ?>">
		<div class="group">
			<input type="text"><span class="highlight"></span><span class="bar"></span>
			<label>Nom</label>
		</div>
		<div class="group">
			<input type="email"><span class="highlight"></span><span class="bar"></span>
			<label>Password</label>
		</div>
		<button type="button" class="button buttonBlue">Se Connecter
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		</button>
	</form>
<?php $this->stop('main_content') ?>
