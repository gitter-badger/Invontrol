<?php
class theme extends db {
	function LoadTheme() {
		$query = <<<SQL
		SELECT path
		FROM inv_themes
		WHERE enabled = :true
SQL;
		$resource = $this->db->prepare( $query );
		$resource->execute( array (
		':true'	=> 1,
		));
		if($resource->rowCount() < 1) {
			echo "No Theme Installed";
		}
		else { 
			foreach($resource as $row){
				$this->path = $row['path'];
			}}
	}
	function Loader() {
		self::LoadTheme();
		require_once(themes_.''.$this->path.'/index.php');
	}
	function LoadViewPage() {
		self::LoadTheme();
		require_once(themes_.''.$this->path.'/viewPage.php');
	}
	function ThemeScript() {
		self::LoadTheme();
		echo HOST_URL.'/themes/'.$this->path.'/';
	}
}
$theme = new theme();