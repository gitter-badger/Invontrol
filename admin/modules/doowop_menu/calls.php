<?php
require_once('functions.php');
if(isset($_POST['process'])){
	switch($_POST['process']){
		case 'updateItem':
		Updatedoowop_menu();
		break;
	}
}