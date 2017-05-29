<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
      <?php if(isset($_SESSION['error'])){ ?>
        <p class="bg-danger"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']);
      }?>
      <pre>
        <?php var_dump($_SESSION) ?>
        <?#php unset($_SESSION['user']); ?>
      </pre>
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3>Connexion</h3>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?= $this->url('admin_inscription') ?>">
						<div class="form-group">
							<input class="form-control" type="text" name="username" placeholder="Identifiant ou E-mail">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" name="password" placeholder="Mot de passe">
						</div>
						<div class="form-group text-center">
							<button class="btn btn-lg btn-success">S'inscrire</button>
              <a href="<?= $this->url('admin_deconnexion') ?>">Deconnexion</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
