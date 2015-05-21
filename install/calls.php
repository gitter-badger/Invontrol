<?php
function TestConnection() {
	$mysqli = new mysqli($_POST['host'], $_POST['user'], $_POST['password'], $_POST['database']);
if ($mysqli->connect_errno) {
    echo '0';
		}
		else{
	echo '1';}
}
if(isset($_POST['process'])){
	switch($_POST['process']){
		case 'checkcon':
		TestConnection();
		break;
	}
}