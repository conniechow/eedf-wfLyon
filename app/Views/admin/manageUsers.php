<?php $this->layout('layout-admin',['title'=>'Dashboard']); ?>
<?php $this->start('main_content') ?>

<h2>Manage Users</h2>
<p><?php
if(isset($error)){
  print $error;
}
?></p>
<p><?php
if(isset($email)){
  print $email;
}
?></p>
<p><?php
if(isset($password)){
  print $password;
}
?></p>
<h3>Logged User:</h3>
<p><?php
if(isset($logged)){
  var_dump($logged);
}
?></p>
<p>
<?php if(isset($user)): ?>
  <p>Salut, <?php print $user['username'] ?></p>
<?php endif ?>
</p>
<!-- LIST ADHERENTS -->

<?php if($w_current_route == 'userManagement_list'):?>
<h3>Users list:</h3>
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
    print '<td>'.$value['phone'].'</td>';
    print '<td><a href="'.$this->url('userManagement_delete_user',['id'=>$value['id']]).'">Delete</a></td>';
    print '</tr>';
  } ?>
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

<?php $this->stop('main_content') ?>
