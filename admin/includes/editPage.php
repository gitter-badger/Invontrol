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
			alert(data);
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
		<form id="updatePage">
		
		<input type="hidden" id="process" name="process" value="updatePage">
		<?php $pages->GenerateEditMenu(); ?>
		</form>
		</div>
		<div style="float:left">
</div>
	<script>
	
	var $j = jQuery.noConflict();
				$j(document).ready(function($) {
				$('#example').dataTable();
				} (jQuery));
				</script>
				</div>
                <!--END CONTENT-->