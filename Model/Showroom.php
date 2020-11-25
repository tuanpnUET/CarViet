<?php
require_once (ROOT."/Helper/Database.php");
class Showroom extends Database{
	
		public function getAll(){
			$sql = "SELECT * FROM showroom";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getByID($id){
			
			$sql = "SELECT * FROM showroom where id='".$id."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function add($tenshowroom, $diachi, $hotline)
		{
			
			$sql = "INSERT INTO showroom(tenshowroom,diachi,hotline) VALUES ('".$tenshowroom."','".$diachi."','".$hotline."')";
			$request = $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function edit($id, $tenshowroom, $diachi, $hotline)
		{
			$sql="UPDATE showroom SET tenshowroom='".$tenshowroom."', diachi='".$diachi."', hotline='".$hotline."' where id='".$id."'";
			$request= $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function delete($id){
			$sql="DELETE FROM showroom where id='".$id."'";
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
		}
	}
  ?>