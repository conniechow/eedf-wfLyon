<?php $this->layout('layout-user-management',['title'=>'Dashboard']); ?>
<?php $this->start('main_content') ?>
<h2>Index</h2>
<ul>
  <li><a href="<?= $this->url('default_home'); ?>">Accueil</a></li>
  <li><a href="<?= $this->url('userManagement_inscription'); ?>">Inscription</a></li>
  <li><a href="<?= $this->url('userManagement_list_users'); ?>">Lister Users</a></li>
  <li><a href="<?= $this->url('userManagement_list_admins'); ?>">Lister Admins</a></li>
  <li><a href="<?= $this->url('userManagement_add_user_admin_form'); ?>">Ajouter Admins</a></li>
</ul>


<?php if(isset($user)): ?>
  <p>Salut, <?php print $user['username'] ?></p>
  <p><a href="<?= $this->url('admin_deconnexion');  ?>">deconnexion</a></p>
<?php endif ?>
</p>


<!-- LIST ADHERENTS -->

<?php if($w_current_route == 'userManagement_list_users'):?>
<h3>Users list:</h3>
<table>
  <tr>
    <th>Nom</th>
    <th>email</th>
    <th>phone</th>
    <th>actions</th>
  </tr>
  <?php foreach ($usersList as $key => $value): ?>
    <tr>
      <td><?= $value['username'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><?= $value['phone'] ?></td>
      <td><a href="<?= $this->url('userManagement_delete_user',['id'=>$value['id']]) ?>">Delete</a></td>
  <?php endforeach ?>
<?php endif ?>
</table>

<!-- LIST ADMINS -->

<?php if($w_current_route == 'userManagement_list_admins'):?>
<h3>Admins list:</h3>
<table>
  <tr>
    <th>Nom</th>
    <th>email</th>
    <th>phone</th>
    <th>actions</th>
  </tr>
  <?php foreach ($usersList as $key => $value): {
    print '<tr>';
    print '<td>'.$value['username'].'</td>';
    print '<td>'.$value['email'].'</td>';
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
<?php $this->stop('main_content') ?>
