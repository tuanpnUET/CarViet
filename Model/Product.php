<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Product extends Database {
		// private static $ocon=null;
		// public function_contruct()
		// {
		// 	$ocon=$this->getConnection();
		// }	
		public function getAll($maloaixe){
			
			$sql = "SELECT * FROM xe
					ORDER BY ngaydang";
			if($maloaixe!="ALL")
				$sql="SELECT * FROM xe 	
					where maloaixe='".$maloaixe."' 
					ORDER BY  ngaydang";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}
		public function getById($maxe){
			
			$sql = "SELECT * FROM xe where maxe='".$maxe."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}	
		public function splq($maxe, $maloaixe){
			$sql="SELECT maxe,tendongxe,anh,maloaixe FROM xe
				Where (maxe='".$maxe."' and maloaixe != '".$maloaixe."')
				ORDER BY RAND()
				LIMIT 3";
		
			$result = $this->getConnection()->prepare($sql);
			$result->execute();

			return $result->fetchAll();
		}
		public function find($value){ 
			$sql = "SELECT * FROM xe Where  tendongxe LIKE '%".$value."%' OR gia LIKE '%".$value."%' ";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}
	}
  ?>