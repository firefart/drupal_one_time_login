<?php
$drupal_hash_salt = ''; # drupal_hash_salt from sites/default/settings.php
$uid=''; # uid field from users table
$pass='$S$....'; # password hash field from users table
$login=''; # login field from users table
$timestamp=time();

$data = $timestamp . $login . $uid;
$key = $drupal_hash_salt . $pass;
$hmac = base64_encode(hash_hmac('sha256', $data, $key, TRUE));
$a = strtr($hmac, array(
  '+' => '-',
  '/' => '_',
  '=' => '',
));

$url = "http://site.com/user/reset/$uid/$timestamp/$a/login";
echo $url . "\n";
