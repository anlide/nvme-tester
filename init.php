<?php
/**
 * Created by PhpStorm.
 * User: Утюг
 * Date: 05.11.2017
 * Time: 23:46
 */
include 'sql.php';
include 'num-cpus.php';
$num_cpu = num_cpus();
function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
for ($i = 0; $i < $num_cpu * 1000000; $i++) {
  $integer1 = rand(0, PHP_INT_MAX);
  $integer2 = rand(0, PHP_INT_MAX);
  $string1 = generateRandomString(10);
  $string2 = generateRandomString(100);
  $data = sql("INSERT INTO `values` (`id`, `integer1`, `integer2`, `string1`, `string2`) VALUES (NULL, ".$integer1.", ".$integer2.", '".$string1."', '".$string2."');");
}
