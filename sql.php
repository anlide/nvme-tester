<?php
/**
 * Created by PhpStorm.
 * User: Утюг
 * Date: 05.11.2017
 * Time: 23:53
 */
$mysqli = new mysqli("127.0.0.1", "nvme-tester", "3K5KBRFWHqnEjFeb", "nvme-tester");
if ($mysqli->connect_errno) {
  echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function sql($sql) {
  global $mysqli;
  $res = $mysqli->query($sql);
  $rows = [];
  if ($res && $res !== true) {
    while ($row = $res->fetch_assoc()) {
      $rows[] = $row;
    }
  }
  return $rows;
}