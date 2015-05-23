<?php
function GetScript(){
	global $db;
	$query = <<<SQL
	SELECT script,message
	FROM inv_googleAdsense
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute();
	if($resource->rowCount()<1){
		echo "Not Found o.O";
	}
	foreach($resource as $row){
		echo '<h4>'.$row['message'].'</h4><br />'.$row['script'];
	}
}
GetScript();