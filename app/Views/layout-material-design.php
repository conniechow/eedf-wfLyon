<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= $this->assetUrl('css/material-design.css') ?>">
  <link rel="stylesheet" href="<?= $this->assetUrl('css/checkmark.css') ?>">
	</head>
<body>
	<?= $this->section('main_content') ?>
	<script type="text/javascript" src="<?= $this->assetUrl('js/material-design.js') ?>"></script>
</body>
</html>
