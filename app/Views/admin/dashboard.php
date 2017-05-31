<?php $this->layout('layout-admin',['title'=>'Dashboard']); ?>

<?php $this->start('main_content') ?>
<div id="homepage">
<!-- EVENMENTS -->
	<div class="row">
		<div class="col-lg-4 col-md-6">
			<div id="blocevent">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-calendar-o fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Evénements</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- PHOTOS -->
		<div class="col-lg-4 col-md-6">
			<div id="blocphoto">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-picture-o fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Photos</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- DOCUMENTS -->
		<div class="col-lg-4 col-md-6">
			<div id="blocdoc">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-file-text fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Documents</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- INSCRIPTION -->
		<div class="col-lg-4 col-md-6">
			<div id="blocinscription">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-sign-in fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Inscriptions</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- LISTE ADHERENT -->
		<div class="col-lg-4 col-md-6">
			<div id="blocadherent">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-address-book fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Adhérents</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- LISTE ADMIN -->
		<div class="col-lg-4 col-md-6">
			<div id="blocadmin">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-user fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Admin</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>

