<?php $this->layout('layout', ['title' => 'Events']) ?>

<?php $this->start('main_content') ?>
	<h2>Calendrier:</h2>
	<iframe src="https://calendar.google.com/calendar"></iframe>
	<h2>Prochaines Sorties:</h2>
	<p></p>
<?php $this->stop('main_content') ?>
