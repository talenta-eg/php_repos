<?php

// you must set display error_reporting to off  in production by one of the following
/*
 * from php.ini file
 * init_set(display_errors, 'off');
 * error_reporting(0)
 */


//run this script with on/off  error_reporting to see the difference
$db = new PDO('mysql:host=abc;dbname=phpSec', 'root', 'root');