<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
if(isset($_POST['process'])){
	switch($_POST['process']){
		case 'createPage':
		print_r($_POST);
		$pages->CreateNewPage();
		break;
	}
}