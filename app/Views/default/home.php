<?php $this->layout('layout', ['title' => 'Project EEDF']) ?>

<?php $this->start('style') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
<?php $this->stop('style') ?>

<?php $this->start('main_content') ?>
	<img src="<?= $this->assetUrl('images/logo.jpg') ?>" alt="">
	<h5>Login</h5>
	<form class="" action="" method="post">
		<input type="text" name="email" value="" placeholder="email"><br>
		<input type="text" name="password" value="" placeholder="password"><br>
		<input type="submit" name="" value="Login"><br>
		<button type="button" name="reset">Reset Password</button><br>
	</form>
	<h5>Sign up</h5>
	<form class="" action="" method="post">
		<input type="text" name="email" value="" placeholder="email"><br>
		<input type="text" name="password" value="" placeholder="password"><br>
		<input type="submit" name="" value="Sign Up">
	</form>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>" type="text/javascript"></script>
<?php $this->stop('script') ?>
