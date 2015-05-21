<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
if(isset($_POST['process'])){
	switch($_POST['process']){
		case 'login':
		$accounts->Login();
		break;
		case 'logout':
		session_destroy();
		echo "1";
		break;
	}
}