<?php
class accounts extends db{
	function Login() {
		global $db;
		$query = <<<SQL
		SELECT id
		FROM inv_accounts
		WHERE email = :email
		AND sha_pass = :sha_pass
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':email'	=> $_POST['email'],
		':sha_pass' => sha1($_POST['email'].':'.$_POST['password']),
		));
		if($resource->rowCount()<1){
			echo "0";
		}
		else{
			foreach($resource as $row){
				$this->id = $row['id'];
			}
			echo "1";
			$_SESSION['id'] = $row['id'];
		}
	}
	public function UserDetails() {
		global $db;
		$query = <<<SQL
		SELECT username,permissions,firstName,lastName
		FROM inv_profile
		WHERE id = :id
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute( array (
		':id'	=> $_SESSION['id'],
		));
		foreach($resource as $row){
			$this->username = $row['username'];
			$this->permissions = $row['permissions'];
			$this->firstName = $row['firstName'];
			$this->lastName = $row['lastName'];

		}
	}
	public function Username(){
		self::UserDetails();
		return $this->username;
	}
	public function Permissions() {
		self::UserDetails();
		return $this->permissions;
	}
	public function fullName() {
		self::UserDetails();
		return $this->firstName.' '.$this->lastName;
	}
	public function CheckPermission() {
		self::Permissions();
		if(self::Permissions() >= '2'){
			
		}
		else{ 
		die(require_once('deny.php'));
		}
	}
} 
$accounts = new accounts();