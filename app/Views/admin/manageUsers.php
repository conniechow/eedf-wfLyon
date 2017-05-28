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
</table>
<?php endforeach ?>
<?php endif ?>
<?php $this->stop('main_content') ?>
