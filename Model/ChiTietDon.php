<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ChiTietDon extends Database{
	public function getAll(){
			
			$sql = "SELECT * FROM chitietdon";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getById($madon){
			
			$sql = "SELECT * FROM chitietdon where madon=". $madon;
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
	
		public function add($madon,$maxe,$gia){
			$sql = "INSERT INTO chitietdon(madon, maxe, gia) VALUES (".$madon.",'".$maxe."',".$gia.")";		
			$result = $this->getConnection()->prepare($sql);
			return $result->execute();
		}		
	}
  ?>