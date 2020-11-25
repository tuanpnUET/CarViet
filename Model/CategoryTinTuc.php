<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class CategoryTinTuc extends Database{
	
		public function getAll(){
			$sql = "SELECT * FROM loaitintuc";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getByID($maloaitintuc){
			
			$sql = "SELECT * FROM loaitintuc where maloaitintuc='".$maloaitintuc."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		
	}
	/*$t=new User();
	$row=$t->edit();*/
	
  ?>