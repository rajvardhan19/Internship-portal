<?php

session_start();

require_once 'config.php';
require_once('lib/Template.php');
require_once('lib/Database.php');
require_once('lib/Internship.php');

require_once 'helpers/system_helper.php';

// echo 'test';

// Autoloader
// function __autoload($class_name){
//     require_once 'lib/'.$class_name. '.php';
// }

// spl_autoload_register('__autoload');

