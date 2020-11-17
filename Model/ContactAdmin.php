<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ContactAdmin extends Database{
	
		public function getAll(){
			$sql = "SELECT * FROM hoidap";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}

		
	}
	/*$t=new User();
	$row=$t->edit();*/
	
  ?>