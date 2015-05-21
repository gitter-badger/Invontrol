<?php
function doowop_menuGetID() {
	global $db;
	$query = <<<SQL
	SELECT id
	FROM inv_modules
	WHERE name = :name
SQL;
	$resource = $db->db->prepare($query );
	$resource->execute( array (
	':name'	=> 'DooWop Menu',
	));
	foreach($resource as $row){
		echo $row['id'];
	}
}
?>
<li><a href="viewModule.php?id=<?php doowop_menuGetID(); ?>">
							<div class="icon-bg bg-grey"></div>
							<span class="menu-title">Doo Wop Menu</span></a>
							</li>
							