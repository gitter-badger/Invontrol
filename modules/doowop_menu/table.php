<link rel="stylesheet" href="<?php echo HOST_URL; ?>/modules/doowop_menu/media/css/jquery.dataTables.css" type="text/css" />
<script src="<?php echo HOST_URL; ?>/modules/doowop_menu/media/js/jquery.js"></script>
<script src="<?php echo HOST_URL; ?>/modules/doowop_menu/media/js/jquery.pageTable.js"></script>

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
	<?php load_doowop_menu(); ?>
	</tbody>
	</table>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#example').dataTable();
				} (jQuery));
				</script>