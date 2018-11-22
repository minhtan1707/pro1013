<?php
function check($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function hash_password($password,$email,$name)
{
  $count=strlen($password);
  $password=substr_replace($password,$email,0,3);
  $password=substr_replace($password,$name,-2);
  $hash=md5($password);
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $count; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  $randomString=substr_replace($randomString,$email,0,3);
  $randomString=substr_replace($randomString,$name,-2);

  $randomString2 = '';
  for ($i = 0; $i < $count; $i++) {
      $randomString2 .= $characters[rand(0, $charactersLength - 1)];
  }
  $randomString2=substr_replace($randomString2,$email,0,3);
  $randomString2=substr_replace($randomString2,$name,-2);

  $randomString3 = '';
  for ($i = 0; $i < $count; $i++) {
      $randomString3 .= $characters[rand(0, $charactersLength - 1)];
  }
  $randomString3=substr_replace($randomString3,$email,0,3);
  $randomString3=substr_replace($randomString3,$name,-2);

  $rand_hash= md5($randomString);
  $rand_hash2= md5($randomString2);
  $rand_hash3= md5($randomString3);
  $pass_hash= $rand_hash.'.'.$rand_hash2.'.'.$hash.'.'.$rand_hash3;
  return $pass_hash;
}
?>