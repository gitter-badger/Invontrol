<?php
class pages extends db{
	public function CreateMenu() {
		global $db;
		$query = <<<SQL
		SELECT id,title,enabled
		FROM inv_pages
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute();
		foreach($resource as $row){
			if($row['enabled']==1){
				$this->status = "Enabled";
			}
			else { $this->status = "Disabled";}
			echo "<tr class = 'clickable-row' data-href='editPage.php?id=".$row['id']."'><td>".$row['title']."</td><td>"
			.$this->status.
			"</td></tr>";
		}
	}
	public function StaticDetails() {
		global $db;
		$query = <<<SQL
		SELECT title,body
		FROM inv_pages
		WHERE position = :none
		AND id = :0
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':none'	=> 'none',
		':0'	=> '0',
		));
		foreach($resource as $row){
			$this->statictitle = $row['title'];
			$this->staticbody = $row['body'];
		}
	}
	public function StaticTitle() {
		self::StaticDetails();
		return $this->statictitle;
	}
	public function StaticBody() {
		self::StaticDetails();
		return $this->staticbody;
	}
	public function ViewPageDetails() {
		global $db;
		$query = <<<SQL
		SELECT title,body
		FROM inv_pages
		WHERE id = :getid
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':getid'	=> $_GET['id'],
		));
		foreach($resource as $row){
			$this->title = $row['title'];
			$this->body = $row['body'];
		}
	}
	public function ViewPageTitle() {
		self::ViewPageDetails();
		return $this->title;
	}
	public function ViewPageBody() {
		self::ViewPageDetails();
			if( is_callable($this->body) )
						$this->body();
					else {
						echo $this->body;
					}
	}
	public function testcall() {
		global $db;
		$query = <<<SQL
		SELECT body
		FROM inv_pages
		WHERE id = :getid
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':getid'	=> $_GET['id'],
		));
		foreach($resource as $row){
			$strip = array("[","]");
			$stripped = str_replace($strip,"",$row['body']);
		if( is_callable($stripped) )
						$stripped();
					else {
						echo $row['body'];

					}
		}
	}
	public function CreateNewPage(){
		if(isset($_POST['enabled'])){
			$enabled = 1;}
			else { $enabled = 2; }
		global $db;
		$query = <<<SQL
		INSERT INTO inv_pages(title,body,enabled,position)
		VALUES(:title,:body,:enabled,:position)
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':title'	=> $_POST['title'],
		':body'		=> $_POST['details'],
		':enabled'	=> $enabled,
		':position'	=> $_POST['menu_location'],
		));

	}
}
$pages = new pages();