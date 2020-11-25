<?php
require_once (ROOT."/Helper/Database.php");
class DatHen extends Database{
	public function getAll(){
			
			$sql = "SELECT * FROM dondathen";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getById($madon){
			
			$sql = "SELECT * FROM dondathen where madon=". $madon;
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function getDonMoi()
		{
			$sql="SELECT * from dondathen  order by madon desc LIMIT 1";
			
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();
		}
		function add($hoten,$sdt,$cmnd,$email,$ngayhen,$diachi,$ghichu)
		{	
			$sql = "INSERT INTO dondathen(hoten,sdt,cmnd,email,ngayhen,diachi,ghichu,trangthai) VALUES ('".$hoten."','".$sdt."','".$cmnd."','".$email."','".$ngayhen."','".$diachi."','".$ghichu."','Chờ xác nhận')";	
			$result = $this->getConnection()->prepare($sql);
			return $result->execute();

		}
		public function edit($madon, $trangthai){
			$sql="UPDATE dondathen SET trangthai='".$trangthai."' where madon='".$madon."'" ;
			$result = $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		public function delete($madon){
			$sql="DELETE FROM dondathen where madon='".$madon."'" ;
			$result = $this->getConnection()->prepare($sql);
			return $request->execute();
		}
	}		
  ?>