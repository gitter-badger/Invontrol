<?php
class mail extends db {
		public function AllMail() {
			global $db;
			$query = <<<SQL
			SELECT id,owner,sender,title,body,opened
			FROM inv_mail
			WHERE owner = :ownerid
SQL;
			$resource = $db->db->prepare( $query );
			$resource->execute( array (
			':ownerid'	=> $_SESSION['id'],
			));
			foreach($resource as $mail) {
				$this->sendid = $mail['sender'];

				self::MailDetails();
				?>
			<tr>
			<td><?php if($mail['opened']==0){ echo "Unread";}?>
				<?php if($mail['opened']==1){ echo "Read";} ?>
			</td><td><?php echo $this->sender; ?></td><td><?php echo $mail['title']; ?></td><td>Time</td></tr>	
				<?php
			}
		}
		public function MailDetails() {
			global $db;
			$query = <<<SQL
			SELECT username
			FROM inv_profile
			WHERE id = :id
SQL;
			$resource = $db->db->prepare( $query );
			$resource->execute( array (
			':id'	=> $this->sendid,
			));
			if($resource->rowCount() < 1 ){
				$this->sender = "Support";
			}
			else{
				foreach($resource as $sender){
					$this->sender = $sender['username'];
				}
			}
		}
		public function UnreadMail() {
			global $db;
			$query = <<<SQL
			SELECT id
			FROM inv_mail
			WHERE owner = :ownerid
			AND opened = :opened
SQL;
			$resource = $db->db->prepare( $query );
			$resource->execute( array (
			':ownerid'	=> $_SESSION['id'],
			':opened'	=> 0,
			));
			return $resource->rowCount();
		}
}
$mail = new mail();