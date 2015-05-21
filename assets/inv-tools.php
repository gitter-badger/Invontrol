<?php
session_start();
ini_set('display_errors', '1');

//Set Paths
define('functions_',base_.'/assets/functions.d/');
define('admin_',base_.'/admin/');
define('install_',base_.'/install/');
define('modules_',base_.'/modules/');
define('plugins_',base_.'/plugins/');
define('config_',base_.'/config.php');
define('themes_',base_.'/themes/');
define('adminmodules_',base_.'/admin/modules/');
//Include All Class Files
foreach (glob(functions_.'*.class.php') as $class) 
 { 
     include $class; 
 } 
 SetProtocol();

 foreach (glob(functions_.'*.subclass.php') as $class) 
 { 
     include $class; 
 } 

