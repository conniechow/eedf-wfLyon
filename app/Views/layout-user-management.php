<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/usersDashboard.css'); ?>">
	<?= $this->section('style') ?>
</head>
<body>
	<?php $this->e($title) ?>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title"><?= $this->e($title) ?></span>
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<div class="demo-avatar-dropdown">
					<span>Salut, <?= $this->e($username) ?></span>
				</div>
			</header>
			<?= $this->section('sidenav_content') ?>
		</div>
		<main class="mdl-layout__content mdl-color--grey-100">
			<?= $this->section('main_content') ?>
		</main>
	</div>
	</div>

	<?= $this->section('script') ?>

	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
