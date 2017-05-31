<?php $this->layout('layout-material-design', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
<hgroup>
<h1>Material Design Form</h1>
<h3>Inscription</h3>
<?php if(isset($message) && $message == 'ok'): ?>
	<script type="text/javascript">
		console.log('ok');
	</script>
	<div class="checkmark-circle">
	  <div class="background"></div>
	  <div class="checkmark draw"></div>
	</div>
<?php endif ?>
</hgroup>
<form id="form" method="POST" action="<?= $this->url('userManagement_inscription') ?>">
	<!-- USERNAME -->
	<div class="group">
		<input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
		<label>Nom</label>
	</div>
	<!-- ERROR USERNAME -->
	<?php if(isset($error) && $error == 'usernameExists'): ?>
		<div>
			<strong>Ce email est deja enregistré.</strong> Click ici pour entrer comme utilisateur.
		</div>
	<?php endIf ?>
	<!-- EMAIL -->
	<div class="group">
		<input type="text" name="email"><span class="highlight"></span><span class="bar"></span>
		<label>eMail</label>
	</div>
	<!-- ERROR EMAIL -->
	<?php if(isset($error) && $error == 'emailExists'): ?>
		<div>
			<strong>Ce email est deja enregistré.</strong> Click ici pour entrer comme utilisateur.
		</div>
	<?php endIf ?>
	<!-- PHONE -->
	<div class="group">
		<input type="text" name="phone"><span class="highlight"></span><span class="bar"></span>
		<label>Phone</label>
	</div>
	<!-- ERROR PHONE -->
	<?php if(isset($error) && $error == 'phoneExists'): ?>
		<div>
			<strong>Ce email est deja enregistré.</strong> Click ici pour entrer comme utilisateur.
		</div>
	<?php endIf ?>
	<!-- PASSWORD -->
	<div class="group">
		<input type="text" name="password"><span class="highlight"></span><span class="bar"></span>
		<label>Password</label>
	</div>
	<!-- ERROR PASSWORD -->
	<?php if(isset($error) && $error == 'emailExists'): ?>
		<div>
			<strong>Ce email est deja enregistré.</strong> Click ici pour entrer comme utilisateur.
		</div>
	<?php endIf ?>
	<button id="buttonSubmit" type="button" class="button buttonBlue">S'inscrire
		<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
	</button>
</form>
<?php $this->stop('main_content') ?>
