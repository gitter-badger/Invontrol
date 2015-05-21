
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
function doowop_menuLoadItems() {
	global $db;
	$query = <<<SQL
	SELECT id,name,price,details,img
	FROM doowop_menu
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute();
	foreach($resource as $row){
		?>
		<tr class='clickable-row' data-href='editItem.php?id=<?php echo $row['id']; ?>'><td><?php echo $row['name']; ?></td><td><?php echo $row['price']; ?></td>
		<td><?php echo $row['details']; ?></td><td><?php echo $row['img']; ?></td></tr></a>
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
		<?php
	}
}
function doowop_menuLoadItem() {
	global $db;
	$query = <<<SQL
	SELECT id,name,price,details,img
	FROM doowop_menu
	WHERE id = :id
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array(
	':id'	=> $_GET['id'],
	));
	foreach($resource as $row){
		?>
		<?php LoadJQuery(); ?>
		<script>
		 $(function() {
		 $("#save").click(function() {
			// validate and process form here
			for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();
		 $.ajax({
			type: "POST",
			url: "calls.php",
			data: $("#updatePage").serialize(),
			success: function(data) {
			$( "#status" ).html("<center><h3>Page Updated</h3></center>");
				 $( "#status" ).fadeIn( "slow", function() {
					 
    // Animation complete
  });
				 $( "#status" ).fadeOut( 3000, function() {
					 
    // Animation complete
  });
			}
		});
    });
	$("#delete").click(function() {
		$( "#status").html("<center><h4>Deleting this Item Cannot Be Undone. Do you want to Continue?");
		$( "#status" ).fadeIn( "slow", function() {
					 
    // Animation complete
  });
	});
  });
		</script>
		<?php $price = str_replace("<br />",",",$row['price']);
		?>
		<div id="status" style="display:none;width:60%;background-color:blue;height:50px;margin:5px;border-style:solid;
		border-radius:5px; margin-left:auto;margin-right:auto;"></div>
		<div style="float:left">
		<form id="updatePage">
		<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
		<input type="hidden" id="process" name="process" value="updateItem">
		<table>
		<tr><td><h4>Name</h4></td><td><h4>Price</h4></td></tr>		
		<tr><td><input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"></td>
		<td><input type="text" id="price" name="price" value="<?php echo $price; ?>"></td>
		<td>Enabled<input type="checkbox" name="enabled" id="enabled" checked></td>
		<td><img src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/images/Drives/Floppy.png" id="save">
		<img src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/images/Desktop/RecycleBin_Empty.png" id="delete">
		</td>
		</tr>
		</table>
		<h4>Details</h4>
		<textarea class="ckeditor" name="details"><?php echo $row['details']; ?></textarea>
		<script src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/ckeditor/ckeditor.js"></script>
		</form>
		</div>
		<div style="float:left">
</div>
		<?php
	}
}
function Updatedoowop_menu() {
	global $db;
	$query = <<<SQL
	UPDATE doowop_menu
	SET name = :name,price = :price,details = :details,img = :img,enabled = :enabled
SQL;
	if(isset($_POST['enabled'])){
		$enabled = 1;
	}
	else{
		$enabled = 0;
	}
	$price = str_replace(",","<br />",$_POST['price']);
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':name'	=> $_POST['name'],
	':price'=> $price,
	':details'=>$_POST['details'],
	':img'	=> 'img',
	':enabled' => $enabled,
	));
}
