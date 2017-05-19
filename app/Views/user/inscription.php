<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3>Inscription</h3>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?= $this->url('admin_inscription') ?>">
						<div class="form-group">
							<input class="form-control" type="text" name="username" placeholder="Identifiant">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" name="password" placeholder="Mot de passe">
						</div>
						<div class="form-group text-center">
							<button class="btn btn-lg btn-success">S'inscrire</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
