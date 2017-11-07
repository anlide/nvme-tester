<?php
/**
 * Created by PhpStorm.
 * User: Утюг
 * Date: 05.11.2017
 * Time: 17:49
 */
include 'num-cpus.php';
$num_cpu = num_cpus();

function execInBackground($cmd){
  if (substr(php_uname(), 0, 7) == "Windows"){
    $href = popen("start /B ". $cmd, "r");
    usleep(1000);
    pclose($href);
  }else{
    exec($cmd . " > /dev/null &");
  }
}

for ($i = 0; $i < $num_cpu; $i++) {
  execInBackground('php -q worker.php '.$i);
}

while (true) {
  sleep(1);
};
