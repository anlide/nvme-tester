<?php
/**
 * Created by PhpStorm.
 * User: Утюг
 * Date: 05.11.2017
 * Time: 17:50
 */
$index = $argv[1];
include 'sql.php';

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
do {
  $id = rand(1, 1000000) + $index * 1000000;
  $integer1 = rand(0, PHP_INT_MAX);
  $integer2 = rand(0, PHP_INT_MAX);
  $integer3 = rand(0, PHP_INT_MAX);
  $integer4 = rand(0, PHP_INT_MAX);
  sql("UPDATE `values` SET `integer1` = ".$integer1.", `integer2` = ".$integer2.", `integer3` = ".$integer3.", `integer4` = ".$integer4." WHERE `values`.`id` = ".$id.";");
} while (true);
