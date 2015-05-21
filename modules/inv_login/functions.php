<?php
function inv_loginUserProfile() {
	include_once(dirname(__FILE__).'/userprofile.php');
}
function inv_loginUsername() {
	global $db;
	$query = <<<SQL
	SELECT username
	FROM inv_profile
	WHERE id = :sessid
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':sessid'	=> $_SESSION['id'],
	));
	foreach($resource as $row){
	echo $row['username'];
	}	
}
function inv_loginProfileLink() {
	global $db;
	$query = <<<SQL
	SELECT id 
	FROM inv_pages
	WHERE position = :pos
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':pos'	=> 'inv_loginProfile',
	));
	if($resource->rowCount() < 1){
		echo "Please Link your Profile Page";
	}
	else{
		foreach($resource as $row){
				echo "<li class='login'><a href='viewPage.php?id=".$row['id']."'>View Profile</a></li>";
		}
	}
}


