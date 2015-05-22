<?php
function inv_load_githubStyle() {
		global $db;
		$query = <<<SQL
		SELECT style
		FROM inv_github
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute();
		foreach($resource as $row){
			switch($row['style']){
				case 'left-red':
				inv_github_topRed();
				break;
				case 'left-green':
				inv_github_topGreen();
				break;
				case 'left-black':
				inv_github_topBlack();
				break;
				case 'left-orange':
				inv_github_topOrange();
				break;
				case 'left-grey':
				inv_github_topGrey();
				break;
				case 'left-dark':
				inv_github_topDark();
				break;
				case 'right-red':
				inv_github_rightRed();
				break;
				case 'right-green':
				inv_github_rightGreen();
				break;
				case 'right-black':
				inv_github_rightBlack();
				break;
				case 'right-orange':
				inv_github_rightOrange();
				break;
				case 'right-grey':
				inv_github_rightGrey();
				break;
				case 'right-dark':
				inv_github_rightDark();
				break;
			}
			
		}
}
function inv_github_Link() {
	global $db;
	$query = <<<SQL
	SELECT link
	FROM inv_github
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute();
	foreach($resource as $row){
		echo $row['link'];
	}
}
function inv_github_topRed(){
?>
	<a href="https://github.com/<?php inv_github_Link(); ?>" target="_blank">
	<img style="position: absolute; top: 0; left: 0; border: 0;" 
	src="https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" 
	alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png"></a>
<?php
}
function inv_github_topGreen() {
?>
	<a href="https://github.com/<?php inv_github_Link(); ?>" target="_blank">
	<img style="position: absolute; top: 0; left: 0; border: 0;" 
	src="https://camo.githubusercontent.com/121cd7cbdc3e4855075ea8b558508b91ac463ac2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" 
	alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png"></a>
<?php
}
inv_load_githubStyle();



?>


