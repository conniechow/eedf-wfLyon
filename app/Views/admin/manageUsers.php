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


<?php $this->stop('main_content') ?>
