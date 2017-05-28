<?php $this->layout('layout', ['title' => 'Project EEDF']) ?>

<?php $this->start('style') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
<?php $this->stop('style') ?>

<?php $this->start('main_content') ?>
	<img src="<?= $this->assetUrl('images/logo.jpg') ?>" alt="">
	<?php if(!$role): ?>
		<h5>Login</h5>
		<form class="" action="<?= $this->url('userManagement_login');  ?>" method="post">
			<input type="text" name="email" value="eedf@gonzalez.rocks" placeholder="email"><br>
			<input type="text" name="password" value="" placeholder="password"><br>
			<input type="submit" name="" value="Login"><br>
			<br><br>
			<a href="">Reset Password</a>
		</form>
	<?php endif ?>
	<?php if($role == 'admin'): ?>
		<h2>Admin pages</h2>
		<ul>
			<li><a href="<?= $this->url('default_gallery');  ?>">Gallerie</a></li>
			<li><a href="<?= $this->url('admin_dashboard');  ?>">Dashboard</a></li>
			<li><a href="<?= $this->url('admin_inscription');?>">Inscription</a></li>
			<li><a href="<?= $this->url('default_events'); ?>">Calendrier/Evénements</a></li>
			<li><a href="<?= $this->url('admin_deconnexion');  ?>">deconnexion</a></li>
		</ul>
	<?php endif ?>
	<?php if($role == 'user'): ?>
		<h2>Pages d'access publique</h2>
			<li><a href="<?= $this->url('admin_inscription');?>">Inscription</a></li>
			<li><a href="<?= $this->url('admin_deconnexion');  ?>">deconnexion</a></li>
	<?php endif ?>





<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>" type="text/javascript"></script>
<?php $this->stop('script') ?>
