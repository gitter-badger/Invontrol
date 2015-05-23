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
		echo "<tr class='clickable-row' data-href='viewPage.php?id=".$viewid."&cat=".$row['id']."'><td>".$row['name']."</td><td>".$row['description']."</td></tr>";
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
function inv_viewForums() {
	?>
	<link rel="stylesheet" href="assets/DataTables-1.10.7/media/css/jquery.dataTables.css" type="text/css" />
<script src="assets/DataTables-1.10.7/media/js/jquery.js"></script>
<script src="assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
			<style>
		tr.clickable-row { cursor: pointer; }
		td { word-wrap: break-word; max-width: 500px;}
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
		<?php
		global $db;
		$detailsquery = <<<SQL
		SELECT subject,posted
		FROM inv_forums
		WHERE id = :forum
SQL;
		$details = $db->db->prepare( $detailsquery );
		$details->execute( array (
		':forum'	=> $_GET['forum'],
		));
		foreach($details as $forumdetails){
			$timestamp = $forumdetails['posted'];
			$subject = $forumdetails['subject'];
		}
		?>
		<th width="25%"><h6><i><?php echo $timestamp; ?></i></h6></th>
		<th style = "max-width:100px;"><?php echo $subject; ?></th>

        </tr>
    </thead>
	
	
 
    <tbody>
		<?php //FetchForums(); ?>
		<?php
		global $db;
		$query = <<<SQL
		SELECT author,body
		FROM inv_forums
		WHERE id= :id
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':id'	=> $_GET['forum'],
		));
		foreach($resource as $row){
		$authorid = $row['author'];	
		$authorquery = <<<SQL
		SELECT id,username,email,permissions
		FROM inv_profile
		WHERE id = :authorid
SQL;
		$authorresource = $db->db->prepare( $authorquery );
		$authorresource->execute( array (
		':authorid'	=> $authorid,
		));
		if($authorresource->rowCount() < 1){
			$gravatar_link = '<img src = "http://www.gravatar.com/avatar/?s=64"';
			$author = "";
			$author .= "<h5>Support</h5><h6>System</h6>"; 
			$author .= $gravatar_link;
			$role = "System";
		}
		foreach($authorresource as $authorrow){
			switch($authorrow['permissions']){
			case 1:
			$role =	"User";
			break;
			case 2:
			$role =	"Donator";
			break;
			case 3:
			$role =	"Moderator";
			case 4:
			break;
			case 5:
			$role =	"Developer";
			break;
			case 6:
			$role =	"Founder";
			break;
			case 0:
			$role =	"Banned";
			break;
			case ($authorrow['permissions'] > 6):
			$role = "Are you a God or a Hacker?";
			break;
			}
			$gravatar_link = 'http://www.gravatar.com/avatar/' . md5($authorrow['email']) . '?s=64';
			$gravatar_linkc = '<img src="' . $gravatar_link . '" />';
			$author = "";
			$author .= "<h5>".$authorrow['username']."</h5><h6>".$role."</h6>";
			$author .= $gravatar_linkc;
		}
		if($role == "Banned"){ 
		$author = "";
		$author .= "<h5><s>".$authorrow['username']."</s></h5><h6 style='color:red'>Banned</h6>";
		$author .= "<img src='modules/inv_forum/banned.png' height='64px'>";}
		echo "<tr><td valign='top'><center>".$author."</center></td><td width='75%'>".$row['body']."</td></tr>";
		}

		?>
		
	</tbody>
	<tfoot>
	<tr>
	<th></th>
	<th align="right">Reply | Flag</th>
	</tr>
	</tfoot>
	</table>
	<center>Quick Reply</center>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#viewForums').dataTable();
				} (jQuery));
				</script>
				<?php
}