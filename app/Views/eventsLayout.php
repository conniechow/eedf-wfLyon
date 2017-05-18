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
		    <--! Afficher Evénements !-->
    </section>
		<footer><?= date('Y') ?> W</footer>
	</div>
</body>
</html>
