                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Pages</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="./index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Mailbox</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Mailbox</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
<link rel="stylesheet" href="assets/DataTables-1.10.7/media/css/jquery.dataTables.css" type="text/css" />
<script src="assets/DataTables-1.10.7/media/js/jquery.js"></script>
<script src="assets/DataTables-1.10.7/media/js/jquery.pageTable.js"></script>
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
<a href="createPage.php">Create Page</a>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
		
		<th>Page Title</th>
		<th>Status</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>

        </tr>
    </tfoot>
 
    <tbody>
	<?php global $pages; $pages->CreateMenu(); ?>
	</tbody>
	</table>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#example').dataTable();
				} (jQuery));
				</script>
				</div>
                <!--END CONTENT-->