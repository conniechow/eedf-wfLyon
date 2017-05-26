<?php $this->layout('EventsLayout', ['title' => 'Evénements']) ?>

<?php $this->start('style') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
<?php $this->stop('style') ?>

<?php $this->start('main_content') ?>
	<img src="<?= $this->assetUrl('images/logo.jpg') ?>" alt="">
	<h5>Login</h5>
	<form class="" action="<?= $this->url('userManagement_login');  ?>" method="post">
		<input type="text" name="email" value="gonzalezdecastro.guillermo@gmail.com" placeholder="email"><br>
		<input type="text" name="password" value="" placeholder="password"><br>
		<input type="submit" name="" value="Login"><br>
		<button type="button" name="reset">Reset Password</button><br>
	</form>

	<h2>Index</h2>
	<ul>
		<li><a href="<?= $this->url('default_gallery');  ?>">Gallerie</a></li>
		<li><a href="<?= $this->url('admin_dashboard');  ?>">Dashboard</a></li>
		<li><a href="<?= $this->url('admin_inscription');?>">Inscription</a></li>
		<li><a href="<?= $this->url('default_events'); ?>">Calendrier/Evénements</a></li>
	</ul>

	<h2>Calendrier des événements</h2>
	<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=eg295kbq80r81gn67nn6srj4eg%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

	<h2>Prochains Evénements</h2>
	<div class="container col-md-12">
					<div class="col-md-4">
						<h4>Sortie dedans</h4>
						<ul>
							<li>Branche concernée: Lutin</li>
							<li>Pique-nique requis : oui</li>
							<li>Commentaires/remarques: BlaBlaBla</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>Retour à la mère patrie</h4>
						<ul>
							<li>Branche concernée: Lutin</li>
							<li>Pique-nique requis : oui</li>
							<li>Commentaires/remarques: BlaBlaBla</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>Partouse dans les bois</h4>
						<ul>
							<li>Branche concernée: Louveteaux</li>
							<li>Pique-nique requis : non</li>
							<li>Commentaires/remarques: BlaBlaBla</li>
						</ul>
					</div>
	</div>
	<input type="button" value="Afficher plus d'éléments" class="btn-info btn-md" >

<?php
		try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=webforce3;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
		        die('Erreur : '.$e->getMessage());
		}

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table events
		$reponse = $bdd->query('SELECT * FROM events');

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch()){
?>
		    <p>
		    <strong>Sortie "</strong> : <?php echo $donnees['title']; ?><strong> "</strong><br />
		    Durée de l'événement: du <?php echo $donnees['startdate']; ?> au <?php echo $donnees['enddate']; ?>.<br />
		    Description :  <?php echo $donnees['description']; ?>.<br />
		    Les participants déjà inscrits sont : <?php echo $donnees['id_participant']; ?>
		   </p>
<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requête
?>

<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>" type="text/javascript"></script>
<?php $this->stop('script') ?>
