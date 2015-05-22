<?php
require_once('./config.php');
global $theme;
global $modules;
$modules->LoadFunctions(); 
$modules->LoadPlugins();
$theme->LoadViewPage();
