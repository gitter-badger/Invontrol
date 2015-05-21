<?php
class db extends pdo{
    //Website Variables
	
    public $sitedb = '';
	public $siteconfig;
    public $sitesettings = array(
        'host'      => DBHOST,
        'database'  => DBDATA,
        'username'  => DBUSER,
        'password'  => DBPASS,
    );
    
    public function __construct(){
        
        $this->db = new PDO(
            "mysql:host={$this->sitesettings['host']};" .
            "dbname={$this->sitesettings['database']};" .
            "charset=utf8",
            "{$this->sitesettings['username']}",
            "{$this->sitesettings['password']}"
        );
		
		$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
	

}

$db = new db();
?>