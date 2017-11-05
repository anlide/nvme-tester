<?php
/**
 * Created by PhpStorm.
 * User: Утюг
 * Date: 05.11.2017
 * Time: 17:50
 */
file_put_contents('file-'.$argv[1].'.txt', print_r($argv, true));
