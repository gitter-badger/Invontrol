<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php'); 
require_once('functions.php');
?>
<a href='guide.php'>Guide</a>
Add New<a href='addItem.php'><img src='media/images/Desktop/Shortcut_Overlay.png'></a>
<link rel="stylesheet" href="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/css/jquery.dataTables.css" type="text/css" />
<script src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/js/jquery.js"></script>
<script src="<?php echo HOST_URL; ?>/admin/modules/doowop_menu/media/js/jquery.dataTables.js"></script>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
		
		<th>Menu Item</th>
		<th>Price</th>
		<th>Details</th>
		<th>Image</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>

        </tr>
    </tfoot>
 
    <tbody>
	<?php doowop_menuLoadItems(); ?>
	</tbody>
	</table>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#example').dataTable();
				} (jQuery));
				</script>