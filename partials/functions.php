<?php

function random_generator($length){

  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*';
  $random_password = '';

  for($i = 0; $i < $length; $i++){
    $random_password.= $chars[rand(0, strlen($chars) - 1)];
  }

  return $random_password;
}

