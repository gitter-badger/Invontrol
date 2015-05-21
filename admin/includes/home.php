                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="./index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">

				<?php
				$updatefile = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/version.xml');
				?>
								<h3><?php echo $updatefile->headline; ?></h3>
				<p><?php echo $updatefile->details; ?></p>
				<h3>Build No. <?php echo $updatefile->build; ?></h3>
				<?php echo $updatefile->type; ?>
				<ul>Authors
				<?php
				foreach($updatefile->author as $author){
					echo "<li>".$author."</li>";
				}
				?>
				</ul>
				<?php 
				$remotefile = simplexml_load_file('https://raw.githubusercontent.com/Doxramos/Invontrol/master/version.xml');
				$remote = $remotefile->build;
				$local = $updatefile->build;
				echo $remote.':'.$local;
				if($local > $remote){
					echo "Update Available!";
				}
				else {
					echo "Up To Date";
				}
				
				?>
				</div>
                <!--END CONTENT-->