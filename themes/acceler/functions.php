<?php
class acceler {
	public function ThemeOptions() {
		global $db;
		$query = <<<SQL
		SELECT slideshow,style
		FROM acceler_options
SQL;
		$resource = $db->db->prepare($query);
		$resource->execute();
		foreach($resource as $row){
			$this->slideshow = $row['slideshow'];
			$this->style	= $row['style'];
		}
	}
	public function SlideShow() {
		self::ThemeOptions();
		if($this->slideshow == 1){
			require_once('assets/slideshow.php');
		}
	}

}
$acceler = new acceler();
	function LoadSlides() {
		global $db;
		$query = <<<SQL
		SELECT id,title,body
		FROM acceler_slides
		WHERE enabled = :true
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true'	=> 1,
		));
		if($resource->rowCount() == 0){
			echo "<div><h2>No Slides Configured</h2><p>Go To your Settings to configure your slides!</p></div>";
		}
		else{
			foreach($resource as $row){
				echo "<div><h2>".$row['title']."</h2><p>".$row['body']."</p></div>";
			}
		}
	}
	function LoadSlideNav() {
		global $db;
		$query = <<<SQL
		SELECT id
		FROM acceler_slides
		WHERE enabled = :true
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true'	=> 1,
		));
		if($resource->rowCount() == 0){
			echo '<span class="jFlowControl">Slide 0</span>';
		}
		else{
			foreach($resource as $row){
				echo '<span class="jFlowControl">Slide '.$row['id'].'</span>';
			}
		}
	}
	function test() {
		echo "Function is Called";
	}