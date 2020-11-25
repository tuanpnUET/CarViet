<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Category extends Database{
	
		public function getAll(){
			$sql = "SELECT * FROM loaixe";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getByID($maloaixe){
			
			$sql = "SELECT * FROM loaixe where maloaixe='".$maloaixe."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function add($maloaixe,$tenloaixe)
		{
			
			$sql = "INSERT INTO loaixe(maloaixe,tenloaixe) VALUES ('".$maloaixe."','".$tenloaixe."')";
			$request = $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function edit($maloaixe,$tenloaixe)
		{
			$sql="UPDATE loaixe SET tenloaixe='".$tenloaixe."' where maloaixe='".$maloaixe."'";
			$request= $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function delete($id){
			$sql="DELETE FROM loaixe where maloaixe='".$id."'";
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();

			

		}
		
	}
	/*$t=new User();
	$row=$t->edit();*/
	
  ?>