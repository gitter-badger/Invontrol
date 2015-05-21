<?php
class newsfeed extends db{
	public function GetNewsDetails(){
		global $db;
		$query = <<<SQL
		SELECT id,img,title,body,author,day,month,year
		FROM inv_newsFeed
		WHERE enabled = :true
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':true'	=> 1,
	));
	foreach($resource as $row){
		$this->id = array($row['id']);
	}
	}
}
$newsfeed = new newsfeed();