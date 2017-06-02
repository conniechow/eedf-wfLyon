<?php $this->layout('layout-user', ['title' => 'EEDF Annonay']) ?>

<?php $this->start('main_content') ?>

<!-- TEXTE INTRO -->
	<section id="texteintro">
		<div class="container">
			
				<h4 class="textdesc">Les Éclaireuses et Éclaireurs de France s'inspirent des principes et méthodes </h4>
				<h4 class="textdesc">du Scoutisme pour les adapter à chaque tranche d'âges.</h4>
				<div class="col-sm-7" id="bloctext">
					<ul><h4>Cette pédagogie privilégie :</h4>
						<li>La vie en pleine nature.</li>
						<li>L'éducation par l'action et le jeu.</li>
						<li>La vie en petites équipes où chacun prend des responsabilités.</li>
						<li>Une pratique quotidienne de la citoyenneté à travers les "conseils" et la règle de vie.</li>
						<li>L'apprentissage de l'engagement et une démarche de progression.</li>
						<div id="btnsavoirplus">
							<a href="#" id="savoirplus">En savoir plus...</a>
						</div>
					</ul>
				</div>
				<div class="col-sm-5">
					<img src="<?= $this->assetUrl('img/avionpapier.png') ?>" class="img-responsive">		
				</div>
		</div>
	</section>


	<div class="container">
		<div class="text-center" id="logobas">
			<a href="#">
				<div class="devantphoto"><i class="fa fa-home"></i></div>
				
				<p class="derrierephoto">Home</p>
			</a>
		</div>
	</div>


<!-- CAROUSEL-->
	<section id="carousel">
		<div class="container">

			<div class="row">
				<h3 class="text-center">Evénements passés</h3>
			</div>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="indexeedf.php">
									<img src="<?= $this->assetUrl('img/sortie2.jpg') ?>" alt="...">
									<div class="carousel-caption">
										<h3>LALA</h3>
										<p>ouaiaua</p>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="indexeedf.php">
									<img src="<?= $this->assetUrl('img/sortie1.jpg') ?>" alt="...">
									<div class="carousel-caption">
										<h3>image 2</h3>
										<p>bienvenue iciciciciciciciic</p>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="indexeedf.php">
									<img src="<?= $this->assetUrl('img/patinoire.jpg') ?>" alt="...">
									<div class="carousel-caption">
										<h3>image 3</h3>
										<p>FLZELFJAZHEGBBZEDGBJJ</p>
									</div>
								</a>	
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
	</section>
	<section id="lastevents">

<?php $this->stop('main_content') ?>