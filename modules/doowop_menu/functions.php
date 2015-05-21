<?php
function doowop_menu(){
	include_once('table.php');
}
function load_doowop_menu() {
	global $db;
	$query = <<<SQL
	SELECT id,name,price,details,img
	FROM doowop_menu
	WHERE enabled = :1
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':1'	=> 1,
	));
	if($resource->rowCount() < 1){
		
	}
	else{
		foreach($resource as $row){
			?>
			<tr><td><?php echo $row['name']; ?></td><td><?php echo $row['price']; ?></td><td><?php echo $row['details']; ?></td><td>img</td></tr>
			<?php
			
		}
	}
}