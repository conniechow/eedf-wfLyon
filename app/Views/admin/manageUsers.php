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
  <div class="mdl-layout-spacer"></div>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
</nav>
<?php $this->stop('sidenav_content') ?>

<?php $this->start('main_content') ?>



<?php if(isset($user)): ?>
  <p><a href="<?= $this->url('admin_deconnexion'); ?>">deconnexion</a></p>
<?php endif ?>
</p>


<!-- LIST ADHERENTS -->
<?php if($w_current_route == 'userManagement_list_users'):?>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th>Nom</th>
      <th>email</th>
      <th>Phone</th>
      <th>Delete</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($usersList as $key => $value): ?>
    <tr>
      <td><?= $value['username'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><?= $value['phone'] ?></td>
      <td><a href="<?= $this->url('userManagement_delete_user',['id'=>$value['id']]) ?>">Delete</a></td>
      <td><a href="<?= $this->url('userManagement_details_user',['id'=>$value['id']]) ?>">Details</a></td>
  <?php endforeach ?>
</tbody>
</table>
<?php endif ?>

<!-- LIST ADMINS -->

<?php if($w_current_route == 'userManagement_list_admins'):?>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th>Nom</th>
      <th>email</th>
      <th>phone</th>
      <th>actions</th>
    </tr>
  </thead>
  <?php foreach ($usersList as $key => $value): {
    print '<tr>';
    print '<td>'.$value['username'].'</td>';
    print '<td>'.$value['email'].'</td>';
    print '<td>00000000000</td>';
    print '<td><a href="'.$this->url('userManagement_delete_user',['id'=>$value['id']]).'">Delete</a></td>';
    print '</tr>';
  } ?>
<?php endforeach ?>
<?php endif ?>
</table>

<!-- ADD ADMINS -->


<?php if($w_current_route == 'userManagement_add_user_admin_form'):?>

<h3>Ajouter un admin</h3>
<form class="" action="<?= $this->url('userManagement_add_user_admin') ?>" method="post">
  <label for="username">Nom</label>
  <input type="text" name="username" value=""><br>
  <label for="email">email</label>
  <input type="text" name="email" value=""><br>
  <label for="password">Password</label>
  <input type="text" name="password" value="">
  <input type="submit" name="" value="Ajouter Admin">
</form>
<?php endif ?>

<!-- SHOW DETAILS ADMIN -->

<?php if($w_current_route == 'userManagement_details_user'): ?>
  <ul style="border:1px solid #DDD">
    <li>Username: <?= $user['username'] ?></li>
    <li>Email : <?= $user['email'] ?></li>
    <li>Phone : <?= $user['phone'] ?></li>
    <li>Motivation : <?= $user['motivation'] ?></li>
  </ul>
  <a href="<?= $this->url('userManagement_edit_user_details_form',['id'=>$user['id']]) ?>">Edit Details</a>
<?php endif ?>

<!-- EDIT DETAILS FORM -->

<?php if($w_current_route == 'userManagement_edit_user_details_form'): ?>
  <form class="" action="<?= $this->url('userManagement_edit_user_details') ?>" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <label for="username">Username</label><br>
    <input type="text" name="username" value="<?= $user['username'] ?>"><br>
    <label for="email">Phone</label><br>
    <input type="text" name="email" value="<?= $user['email'] ?>"><br>
    <label for="phone">Phone</label><br>
    <input type="text" name="phone" value="<?= $user['phone'] ?>"><br>
    <label for="motivation">Motivation</label><br>
    <textarea name="motivation" rows="8" cols="80"><?= $user['motivation'] ?></textarea><br>
    <input type="submit" name="" value="Edit Details">
  </form>
<?php endif ?>
<?php $this->stop('main_content') ?>
