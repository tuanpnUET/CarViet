<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class User extends Database{
			private static $ocon=null;
		public function __construct()
		{
			
			$ocon=$this->getConnection();

		}
		public function getAll(){
			
			$sql = "SELECT id, taikhoan, matkhau, quyen FROM tblnguoidung";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}

		public function login($taikhoan,$matkhau)
		{
			$sql = "SELECT ID, taikhoan, matkhau, quyen FROM tblnguoidung";
			$sql.=" WHERE taikhoan='".$taikhoan."' and matkhau='".$matkhau."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();
		}
		
		public function getById($id){
			
			$sql = "SELECT ID, taikhoan, matkhau, quyen FROM tblnguoidung where ID=".$id;
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function add($taikhoan, $matkhau)
		{
			
			$sql = "INSERT INTO tblnguoidung(taikhoan, matkhau, quyen) VALUES ('".$taikhoan."','".$matkhau."',1)";
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
			
		}
		public function reg($taikhoan, $matkhau)
		{
			
			$sql = "INSERT INTO tblnguoidung(taikhoan, matkhau, quyen) VALUES ('".$taikhoan."','".$matkhau."',1)";
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
			
		}
		public function edit($taikhoan,$matkhau,$id){
			$sql="UPDATE tblnguoidung SET taikhoan='".$taikhoan."',matkhau='".$matkhau."' where id=".$id;
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
			
		}

		public function doimatkhau($taikhoan,$matkhaumoi){
			$sql="UPDATE tblnguoidung SET matkhau='".$matkhaumoi."' where taikhoan='".$taikhoan."'";
			
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function delete($id){
			$sql="DELETE FROM tblnguoidung where id=".$id;
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();

		
		}
		public function find(string $taikhoan){
			$userList = array();
			$sql = "SELECT id, taikhoan, matkhau, quyen, hoatdong FROM tblnguoidung where taikhoan='".$taikhoan."'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$objuser = new User($row['id'], $row['taikhoan'], $row['matkhau'], $row['quyen'],$row['hoatdong']);
						array_push($userList, $objuser);
					}
			}
			return $userList;
		}
		
	}
/*	$t=new User();
	$row=$t->getAll();
	echo $row["taikhoan"];*/
  ?>