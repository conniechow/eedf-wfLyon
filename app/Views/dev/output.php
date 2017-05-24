<?php

print $result;

if(isset($id)){
  dumpOutput($id);
}

if(isset($url)){
  dumpOutput($url);
}

function showOutput($text){
  print '<p>'.$text.'</p>';
}

function dumpOutput($var){
  print '<p>';
  var_dump($var);
  print '</p>';
}

 ?>
