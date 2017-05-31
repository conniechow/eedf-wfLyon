<?php

if(isset($result)){
  dumpOut($result);
}

function showOutput($text){
  print '<p>'.$text.'</p>';
}

function dumpOut($var){
  print '<p>';
  var_dump($var);
  print '</p>';
}

?>
