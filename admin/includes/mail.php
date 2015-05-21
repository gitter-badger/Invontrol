                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Mail</div>
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
<script src="assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
			<div style="float:left; width:20%"><ul>
			<li><a href='composeMail.php'>Compose New</a></li>
			<li>Inbox</li>
			<li>Spam</li>
			<li>Trash</li>
			</ul>
			</div>	
			<div style="float:right; width:80%;">
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
		<th></th>
		<th>Sender</th>
		<th>Title</th>
		<th>TimeStamp</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>

        </tr>
    </tfoot>
 
    <tbody>
	<?php $mail->AllMail(); ?>
	</tbody>
	</table>
	</div>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#example').dataTable();
				} (jQuery));
				</script>
				</div>
                <!--END CONTENT-->