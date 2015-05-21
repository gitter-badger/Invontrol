<?php
function doowop_sliderStatus() {
	global $db;
	$query = <<<SQL
	SELECT slider
	FROM doowop_options
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute();
	foreach($resource as $row){
		if($row['slider']==1){
			include_once("assets/slider.php");
		}
		else{
		}
	}
}
function doowop_loadSlides() {
	global $db;
	global $theme;
	$query = <<<SQL
	SELECT id,title,body,img
	FROM doowop_slides
	WHERE enabled = :true
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':true'	=> 1,
	));
	if($resource->rowCount() < 1 ){
		?>
		<li>
			<img src="<?php $theme->ThemeScript(); ?>/css/images/WASTE.png" alt="" class="alignleft"/>
				<div class="slide-cnt">
				<h2>DooWop Has a built in slider that you aren't utlizing!</h2>
				<p>Yeah; you may have enabled it, but you don't have any custom slides!</p>
				</div>
			</li>
		<?php
	}
	else{
		foreach($resource as $row){
			?>
			<li>
			<img src="<?php $theme->ThemeScript(); ?>/css/images/WASTE.png" alt="" class="alignleft"/>
				<div class="slide-cnt">
				<h2><?php echo $row['title']; ?></h2>
				<p><?php echo $row['body']; ?></p>
				</div>
			</li>
			<?php
		}
	}
	
}
function NewsFeed() {
	global $db;
	$query = <<<SQL
	SELECT id,img,title,body,author,day,month,year
	FROM inv_newsFeed
	WHERE enabled = :true
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':true'	=> 1,
	));
	if($resource->rowCount() < 1){
		echo 'none';
	}
	else{
		foreach($resource as $row){

				$query = <<<SQL
				SELECT username
				FROM inv_profile
				WHERE id = :id
SQL;
			$resource2 = $db->db->prepare( $query );
			$resource2->execute( array (
			':id'	=> $row['id'],
			));
			foreach($resource2 as $row2){
				$username = $row2['username'];
			
			}
			
			?>
		<div class="entry">
		<div class="date">
		<strong><?php echo $row['day']; ?><small><?php echo $row['year']; ?></small></strong>
				<em><?php echo $row['month']; ?></em>
		</div>
				<div class="cnt">
		<h4><?php echo $row['title']; ?></h4>
	<p><?php echo $row['body']; ?> </p>
	<p>Posted By: <?php echo $username; ?></p>
						</div>
		</div>
			<?php
		}
	}
}
