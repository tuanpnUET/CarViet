<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Category extends Database{
	
		public function getAll(){
			$sql = "SELECT * FROM loaisanpham";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getByID($maloai){
			
			$sql = "SELECT * FROM loaisanpham where maloai='".$maloai."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function add($maloai,$tenloai)
		{
			
			$sql = "INSERT INTO loaisanpham(maloai,Tenloai) VALUES ('".$maloai."','".$tenloai."')";
			$request = $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function edit($maloai,$tenloai)
		{
			$sql="UPDATE loaisanpham SET Tenloai='".$tenloai."' where maloai='".$maloai."'";
			$request= $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function delete($id){
			$sql="DELETE FROM loaisanpham where maloai='".$id."'";
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();

			

		}
		public function find(string $tentaikhoan){
			$userList = array();
			$sql = "SELECT id, tentaikhoan, matkhau, quyen, hoatdong FROM tblnguoidung where tentaikhoan='".$tentaikhoan."'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$objuser = new User($row['id'], $row['tentaikhoan'], $row['matkhau'], $row['quyen'],$row['hoatdong']);
						array_push($userList, $objuser);
					}
			}
			return $userList;
		}
		
	}
	/*$t=new User();
	$row=$t->edit();*/
	
  ?>