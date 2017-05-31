<?php $this->layout('layout', ['title' => 'Project EEDF']) ?>

<?php $this->start('style') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
<?php $this->stop('style') ?>
<?php $this->start('main_content') ?>

<img src="<?= $this->assetUrl('images/logo.jpg') ?>" alt="">
	<?php if(isset($message)): ?>
		<p><?php print($message) ?></p>
	<?php endif ?>
	<?php if(isset($output)): ?>
		<p><?php var_dump($output) ?></p>
	<?php endif ?>
	<?php if(isset($user)): ?>
		<p>Salut, <?php print $user['username'] ?></p>
		<li><a href="<?= $this->url('admin_deconnexion');  ?>">deconnexion</a></li>
	<?php endif ?>
	<?php if(!isset($user)): ?>
		<h5>Login</h5>
		<form class="" action="<?= $this->url('userManagement_login');  ?>" method="post">
			<input type="text" name="email" value="andre" placeholder="email"><br>
			<input type="text" name="password" value="marklin3491" placeholder="password"><br>
			<input type="submit" name="" value="Login"><br>
			<br><br>
			<a href="#">Reset Password</a><br><br>
			<a href="<?= $this->url('userManagement_inscription');?>">Inscription</a>
		</form>
	<?php endif ?>

<!-- ROLE SUPERADMIN  -->

<?php if( isset($user) && $user['role'] == 'superadmin'):?>
	<a href="<?= $this->url('userManagement_list_admins'); ?>">Manage Admins</a>
<?php endif ?>

<!-- BOTH ADMIN AND SUPERAMDIN -->

<?php if( isset($user) && $user['role'] == 'admin' || isset($user) && $user['role'] == 'superadmin' ): ?>

	<h2>Index</h2>
	<ul>
		<li><a href="<?= $this->url('default_gallery');  ?>">Gallerie</a></li>
		<li><a href="<?= $this->url('admin_dashboard');  ?>">Dashboard</a></li>
		<li><a href="<?= $this->url('userManagement_inscription');?>">Inscription</a></li>
		<li><a href="<?= $this->url('default_events'); ?>">Calendrier/Evénements</a></li>
		<li><a href="<?= $this->url('userManagement_list_users'); ?>">Adherents Management</a></li>
	</ul>
<?php endif ?>

<?php if(isset($role) && $role == 'adherent'): ?>
	<h2>Pages d'access publique</h2>
		<li><a href="<?= $this->url('userManagement_inscription');?>">Inscription</a></li>
		<li><a href="<?= $this->url('admin_deconnexion');  ?>">deconnexion</a></li>
<?php endif ?>


<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>" type="text/javascript"></script>
<?php $this->stop('script') ?>
