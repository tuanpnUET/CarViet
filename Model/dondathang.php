<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Dondathang extends Database{
	public function getAll(){
			
			$sql = "SELECT * FROM dondathang";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getById($sohoadon){
			
			$sql = "SELECT * FROM dondathang where Sohoadon=". $sohoadon;
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function getSohoadonnew()
		{
			$sql="SELECT * from dondathang  order by Sohoadon desc LIMIT 1";
			
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();
		}
		function add($hoten,$sdt,$diachi,$email,$ghichu)
		{
			$nowdate=getdate();
			$strdate=$nowdate["year"]."-".$nowdate["mon"]."-".$nowdate["mday"];
			$date=date("Y-m-d", strtotime($strdate));
			
			$sql = "INSERT INTO dondathang(nguoidathang,sdt,diachi,email,ghichu,ngaydathang,trangthai) VALUES ('".$hoten."','".$sdt."','".$diachi."','".$email."','".$ghichu."','".$date."','Chờ xác nhận')";	
					
			$result = $this->getConnection()->prepare($sql);
			return $result->execute();

		}
		public function edit(){
			$sql="UPDATE dondathang SET Tenloai='".$tenloai."', Mota='".$mota."' where masanpham='".$masanpham."'" ;
			$result = $this->getConnection()->prepare($sql);
			return $request->execute();
			
		}
		public function delete($id){
			$sql="DELETE FROM dondathang where masanpham='".$id."'" ;
			$result = $this->getConnection()->prepare($sql);
			return $request->execute();
		}
		
		
	}
	//$t=new Category();

	//echo $t->add('L01','Nuoc uong','nuoc uong');
		
		
  ?>