<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Product extends Database {
		// private static $ocon=null;
		// public function_contruct()
		// {
		// 	$ocon=$this->getConnection();
		// }	
		public function getAll($maloai){
			
			$sql = "SELECT * FROM sanpham
					ORDER BY ngaydang";
			if($maloai!="ALL")
				$sql="SELECT * FROM sanpham 	
					where maloai='".$maloai."' 
					ORDER BY  ngaydang";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}
		public function getById($masanpham){
			
			$sql = "SELECT * FROM sanpham where masanpham='".$masanpham."'";
			
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}	
		public function splq($maloai,$masanpham){
			$sql="SELECT masanpham,tensanpham,anh,maloai FROM sanpham
				Where (maloai='".$maloai."' and masanpham != '".$masanpham."')
				ORDER BY RAND()
				LIMIT 3";
		
			$result = $this->getConnection()->prepare($sql);
			$result->execute();

			return $result->fetchAll();
		}
		public function find($value){ 
			$sql = "SELECT * FROM sanpham Where  tensanpham LIKE '%".$value."%' OR loaisanpham LIKE '%".$value."%' ";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}
	}
  ?>