<?php
require_once('functions.php');
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
		
		<div id="status" style="display:none;width:60%;background-color:blue;height:50px;margin:5px;border-style:solid;
		border-radius:5px; margin-left:auto;margin-right:auto;"></div>
		<div style="float:left">
		<form id="createItem">
		
		<input type="hidden" id="process" name="process" value="createItem">
		<table>
		<tr><td><h4>Name</h4></td><td><h4>Price</h4></td></tr>		
		<tr><td><input type="text" id="name" name="name"></td>
		<td><input type="text" id="price" name="price" ></td>
		<td>Enabled<input type="checkbox" name="enabled" id="enabled" checked></td>
		<td><img src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/images/Drives/Floppy.png" id="save">
		<img src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/images/Desktop/RecycleBin_Empty.png" id="delete">
		</td>
		</tr>
		</table>
		<h4>Details</h4>
		<textarea class="ckeditor" name="details"></textarea>
		<script src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/ckeditor/ckeditor.js"></script>
		</form>
		</div>
		<div style="float:left">
</div>