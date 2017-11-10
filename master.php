<?php
/**
 * Created by PhpStorm.
 * User: Утюг
 * Date: 05.11.2017
 * Time: 17:49
 */
include 'num-cpus.php';
$num_cpu = num_cpus();

function execInBackground($cmd) {
  return shell_exec(sprintf('%s > /dev/null 2>&1 & echo $!', $cmd));
}

$pids = [];
for ($i = 0; $i < $num_cpu; $i++) {
  $pids[$i] = execInBackground('php -q worker.php '.$i);
}

declare(ticks = 1);

pcntl_signal(SIGINT, "signal_handler");

function signal_handler($signal) {
  global $pids;
  switch($signal) {
    case SIGINT:
      print "Ctrl C\n";
      foreach ($pids as $index => $pid) {
        shell_exec('kill '.$pid);
      }
      exit;
      break;
  }
}

while(true) {
  usleep(10000);
}
