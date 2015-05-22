<?php
	function inv_forum() {
		echo "Time to Build a Forum!";
		?>
<link rel="stylesheet" href="assets/DataTables-1.10.7/media/css/jquery.dataTables.css" type="text/css" />
<script src="assets/DataTables-1.10.7/media/js/jquery.js"></script>
<script src="assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
			<style>
		tr.clickable-row { cursor: pointer; }
		</style>
		<script>
		jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
<table id="viewCategories" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
		
		<th>Category</th>
		<th>Description</th>
        </tr>
    </thead>

 
    <tbody>
		<?php GetCategories(); ?>
	</tbody>
	</table>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#viewCategories').dataTable();
				} (jQuery));
				</script>

		<?php
	}
function GetCategories() {
	global $db;
	$pagequery = <<<SQL
	SELECT id
	FROM inv_pages
	WHERE body = :viewcat
SQL;
		$pageresource = $db->db->prepare( $pagequery );
		$pageresource->execute( array(
		':viewcat'	=> '[inv_viewCat]',
		));
		foreach($pageresource as $view){
			$viewid = $view['id'];
		}
	$query = <<<SQL
	SELECT id,name,description
	FROM inv_categories
	WHERE enabled = :true
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':true'	=> 1,
	));
	foreach($resource as $row){
		echo "<tr class='clickable-row' data-href='viewPage.php?id=".$viewid."&cat=".$row['id']."'><td>".$row['name']."</td><td>".$row['name']."</td></tr>";
	}
}
function inv_viewCat() {
	?>
	<link rel="stylesheet" href="assets/DataTables-1.10.7/media/css/jquery.dataTables.css" type="text/css" />
<script src="assets/DataTables-1.10.7/media/js/jquery.js"></script>
<script src="assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
			<style>
		tr.clickable-row { cursor: pointer; }
		</style>
		<script>
		jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
<table id="viewForums" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
		
		<th>Author</th>
		<th>Subject</th>
		<th>Replies</th>
		<th>Views</th>
        </tr>
    </thead>

 
    <tbody>
		<?php FetchForums(); ?>
	</tbody>
	</table>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#viewForums').dataTable();
				} (jQuery));
				</script>
		<?php 
}
function FetchForums() {
	global $db;
			$pagequery = <<<SQL
			SELECT id
			FROM inv_pages
			WHERE body = :body
SQL;
			$pageresource = $db->db->prepare( $pagequery );
			$pageresource->execute( array (
			':body'	=> '[inv_viewForums]',
			));
			foreach($pageresource as $view){
				$viewid = $view['id'];
			}
	$query = <<<SQL
	SELECT id,subject,author,replies,views,enabled
	FROM inv_forums
	WHERE enabled = :true
	AND parent = :parent
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true'	=> '1',
		':parent'=>$_GET['cat'],
		));
		foreach($resource as $row){
					$authorquery = <<<SQL
					SELECT username
					FROM inv_profile
					WHERE id = :id
SQL;
					$authorresource = $db->db->prepare( $authorquery );
					$authorresource->execute( array (
					':id'	=> $row['author'],
					));
					if($authorresource->rowCount() < 1){
						$author = "Support";
					} else {
						foreach($authorresource as $authorname){
							$author = $authorname['username'];
						}
					}
			echo "<tr class='clickable-row' data-href='viewPage.php?id=".$viewid."&forum=".$row['id']."'><td>".$author."</td><td>".$row['subject']."</td>
			<td>".$row['replies']."</td><td>".$row['views']."</td></tr>";
		}
}