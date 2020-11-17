<?php
require_once (ROOT."/Helper/Database.php");
class Contact extends Database{
	public function index($hoten,$sdt,$email,$noidung,$diachi){
		$sql="INSERT INTO hoidap(hoten,sdt,email,noidung,diachi) VALUES ('".$hoten."','".$sdt."','".$email."','".$noidung."','".$diachi."')";
		$request=$this->getConnection()->prepare($sql);
		return $request->execute();	
	}
}
?>