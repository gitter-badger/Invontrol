<?php
define('TEST_INCLUDE','included');
class navigation extends db{
	 function LoadMainMenu() {
		global $db;
		$query = <<<SQL
		SELECT id,title
		FROM inv_pages
		WHERE enabled = :true
		AND position = :main
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':true'	=> 1,
		':main'	=> 'main_menu',
		));
		?>
		<li><a href='index.php'>Home</a></li>
		<?php
		foreach($resource as $menuitem){
			?>
		<li><a href='viewPage.php?id=<?php echo $menuitem['id']; ?>'><?php echo $menuitem['title']; ?></a></li>
		<?php
		}
		}
		function Test() {
			echo "Test";
		}
	}
$navigation = new navigation();