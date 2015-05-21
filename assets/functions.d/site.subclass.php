<?php
class site extends db{
	public function SiteDetails() {
		global $db;
		$query = <<<SQL
		SELECT name,copyright,webmaster,webmasteremail
		FROM inv_sitedetails
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute();
		foreach($resource as $row){
			$this->name = $row['name'];
			$this->copyright = $row['copyright'];
			$this->webmaster = $row['webmaster'];
			$this->webmasteremail = $row['webmasteremail'];
		}
	}
	public function SiteName() {
		self::SiteDetails();
		return $this->name;
	}
	public function SiteCopyright() {
		self::SiteDetails();
		return $this->copyright;
	}
	public function WebmasterLink() {
		self::SiteDetails();
		return "<a href='mailto:".$this->webmasteremail."'>".$this->webmaster."</a>";
	}
}
$site = new site();