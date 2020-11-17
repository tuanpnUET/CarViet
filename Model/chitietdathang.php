<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Chitietdathang extends Database{
	public function getAll(){
			
			$sql = "SELECT * FROM chitietdonhang";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getById($sohoadon){
			
			$sql = "SELECT * FROM chitietdonhang where Sohoadon=". $sohoadon;
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
	
		public function add($sohoadon,$masanpham,$soluong,$gia)
		{
				
			$sql = "INSERT INTO chitietdonhang(Sohoadon,masanpham,soluong,gia) VALUES (".$sohoadon.",'".$masanpham."',".$soluong.",".$gia.")";		
			
			$result = $this->getConnection()->prepare($sql);
			return $result->execute();

		}
		
		
		
	}
	//$t=new Chitietdathang();

	//echo $t->add(21,'SP01',100,100);
		
	
  ?>