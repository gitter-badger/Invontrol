<?php
class modules extends db {
	function ModulesRight() {
		global $db;
		$query = <<<SQL
		SELECT path
		FROM inv_modules
		WHERE enabled = :true
		AND pos = :right
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true'	=> 1,
		':right'	=> 'right-sidebar',
		));
		foreach($resource as $row){
			include_once(modules_.''.$row['path'].'/index.php');
		}
	}
		function LoadFunctions() {
		global $db;
		$query = <<<SQL
		SELECT path
		FROM inv_modules
		WHERE enabled = :true
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true'	=> 1,
		));
		foreach($resource as $row){
			include_once(modules_.''.$row['path'].'/functions.php');
		}
	}
	function LoadAdminBackend() {
		global $db;
		$query = <<<SQL
		SELECT path
		FROM inv_modules
		WHERE enabled = :true
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true' => 1,
		));
		foreach($resource as $row){
			if(file_exists(adminmodules_.''.$row['path'].'/index.php')){
			include_once(adminmodules_.''.$row['path'].'/index.php');}
		}
	}
	public function LoadAdmin() {
		global $db;
		$query = <<<SQL
		SELECT path
		FROM inv_modules
		WHERE id = :getid
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':getid'	=> $_GET['id'],
		));
		foreach($resource as $row){
			include_once(adminmodules_.''.$row['path'].'/viewModule.php');
		}
	}
}
$modules = new modules();