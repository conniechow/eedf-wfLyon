<?php $this->layout('layout-user-management',['title'=>'Users Management','username'=>$loggedUser['username']]); ?>
<?php $this->start('header_content') ?>

<?php $this->stop('header_content') ?>
<?php $this->start('sidenav_content') ?>
<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <a class="mdl-navigation__link" href="<?= $this->url('default_home'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Accueil</a>
  <a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Inscription</a>
  <a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>List Users</a>
  <a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>List Admins</a>
  <a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add</i>Ajouter Admins</a>
  <a class="mdl-navigation__link" href="<?= $this->url('admin_deconnexion'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i>Deconnexion</a>
</nav>
<?php $this->stop('sidenav_content') ?>

<?php $this->start('main_content') ?>

<?php if(isset($newAdmin)): ?>
  <p><? var_dump($newAdmin); ?></p>
<?php endif ?>

</p>

<!-- LIST ADHERENTS -->

<?php if($w_current_route == 'userManagement_list_users'):?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--middle">
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
      <thead>
        <tr>
          <th>Nom</th>
          <th>email</th>
          <th>Phone</th>
          <th></th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($usersList as $key => $value): ?>
        <tr>
          <td><?= $value['username'] ?></td>
          <td><?= $value['email'] ?></td>
          <td><?= $value['phone'] ?></td>
          <td><a style="color:red" href="<?= $this->url('userManagement_delete_user',['id'=>$value['id']]) ?>"><i class="material-icons">delete</i></a></a></td>
          <td><a href="<?= $this->url('userManagement_details_user',['id'=>$value['id']]) ?>">Details</a></td>
      <?php endforeach ?>
    </tbody>
    </table>
  </div>
</div>
<?php endif ?>

<!-- LIST ADMINS -->

<?php if($w_current_route == 'userManagement_list_admins'):?>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--middle">
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
      <thead>
        <tr>
          <th>Nom</th>
          <th>email</th>
          <th>phone</th>
          <th></th>
        </tr>
      </thead>
      <?php foreach ($usersList as $key => $value):?>
        <tr>
        <td><?=$value['username']?></td>
        <td><?=$value['email']?></td>
        <td>000000</td>
        <td><a style="color:red" href="<?=$this->url('userManagement_delete_user',['id'=>$value['id']])?>"><i class="material-icons">delete</i></a></td>
        </tr>
    <?php endforeach ?>
    </table>
  </div>
</div>
<?php endif ?>

<!-- ADD ADMINS -->

<?php if($w_current_route == 'userManagement_add_user_admin_form'):?>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--middle">
    <form action="<?= $this->url('userManagement_add_user_admin') ?>" method="POST">
      <!-- username -->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="username">
        <label class="mdl-textfield__label" for="username">username</label>
      </div>
      <!-- email -->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="email">
        <label class="mdl-textfield__label" for="email">email</label>
      </div>
      <!-- password -->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="password">
        <label class="mdl-textfield__label" for="password">password</label>
      </div>
      <div>
        <input style="color:#FFF" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="ajouter admin">
      </div>
  </div>
</div>
<?php endif ?>

<!-- SHOW DETAILS ADMIN -->

<?php if($w_current_route == 'userManagement_details_user'): ?>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--middle">
      <div class="mdl-card mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title">
            <?= $user['username'] ?>
          </h2>
        </div>
        <ul class="demo-list-item mdl-list">
          <li class="mdl-list__item mdl-list__item--two-line">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-avatar">person</i>
            <span><?= $user['username'] ?></span>
            <span class="mdl-list__item-sub-title"><?= $user['role'] ?></span>
            </span>
          <span class="mdl-list__item-secondary-content">
            <span class="mdl-list__item-secondary-info">Confirmé</span>
            <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">check</i></a>
          </span>
        </li>
        <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Email : <?= $user['email'] ?>
          </span>
        </li>
        <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Tél : <?= $user['phone'] ?>
          </span>
        </li>
        <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <?= $user['motivation'] ?>
          </span>
        </li>
        </ul>
      <div class="mdl-card__menu">
        <a href="<?= $this->url('userManagement_edit_user_details_form',['id'=>$user['id']]) ?>">
          <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
            <i class="material-icons">edit</i>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
<?php endif ?>

<!-- EDIT DETAILS FORM -->

<?php if($w_current_route == 'userManagement_edit_user_details_form'): ?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--middle">
        <div class="mdl-card mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title">
              <?= $user['username'] ?>
            </h2>
          </div>
          <form action="<?= $this->url('userManagement_edit_user_details'); ?>" method="POST">
            <input type="text" value="<?=$user['id']?>" hidden name="id">
            <ul class="demo-list-item mdl-list">
              <li class="mdl-list__item mdl-list__item--two-line">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="username" value="<?=$user['username']?>">
                  <label class="mdl-textfield__label" for="username"></label>
                </div>
              </li>
              <li class="mdl-list__item">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="email" value="<?=$user['email']?>">
                  <label class="mdl-textfield__label" for="email">email</label>
                </div>
              </li>
              <li class="mdl-list__item">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="phone" value="<?=$user['phone']?>"?>
                  <label class="mdl-textfield__label" for="telephone">telephone</label>
                </div>
              </li>
              <li class="mdl-list__item">
                <div class="mdl-textfield mdl-js-textfield">
                  <textarea class="mdl-textfield__input" type="text" rows= "3"><?=$user['motivation']?></textarea>
                  <label class="mdl-textfield__label" for="sample5">Plus d'infos</label>
                </div>
              </li>
              <li class="mdl-list__item">
                <div>
                  <input style="color:#FFF" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Enregistrer">
                </div>
              </li>
            </ul>
          </form>
      </div>
    </div>
  </div>
<?php endif ?>
<?php $this->stop('main_content') ?>
