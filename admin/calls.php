<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
if(isset($_POST['process'])){
	switch($_POST['process']){
		case 'createPage':
		$pages->CreateNewPage();
		break;
		case 'updatePage':
		$pages->EditPage();
		break;
		
	}
}