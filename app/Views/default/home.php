<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('style') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
<?php $this->stop('style') ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>" type="text/javascript"></script>
<?php $this->stop('script') ?>
