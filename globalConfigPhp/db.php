<?php

// connection through ini file or php file
$ini = parse_ini_file('db.ini');
// config class
include('Config.php');
//PDO class
include('MyPDO.php');

Config::setProtectedList(['host' => '127.0.0.1' ,'port'=> 3306  , 'char_set' =>'utf8' ,'db_name' => 'web_service' , 'db_user' => 'root' , 'db_password' => 'root']);

MyPDO::Connection(Config::getProtected('host'), //and all other properties);