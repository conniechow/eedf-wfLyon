<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Calendrier/Evénements</title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>Calendrier/Evénements</h1>
		</header>
		<section>
			<?= $this->section('main_content') ?>
			<iframe></iframe>
    		</section>
    		
		<section>
		  	<?= $this->section('main_content') ?>
			<p>Evénement du mois: Sausage Party :D</p>
			    
    		</section>
		<footer><?= date('Y') ?> W</footer>
	</div>
</body>
</html>

<?php 
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout')
?>

<?php 
//début du bloc main_content
$this->start('main_content'); ?>
<h1>Prochains Evénements</h1>

<?php 
//fin du bloc
$this->stop('main_content'); ?>
