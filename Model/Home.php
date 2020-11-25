<?php
require_once (ROOT."/Helper/Database.php");
class trangchu extends Database{
	public function newsp(){
		$sql = "SELECT maxe,tendongxe,gia,anh,maloaixe FROM xe
				ORDER BY ngaydang
				LIMIT 6";
		$result = $this->getConnection()->prepare($sql);
		$result->execute();
		return $result->fetchAll();
	}
	public function newtt(){
		$sql = "SELECT matintuc,tentintuc,anh FROM tintuc
				ORDER BY Rand()
				LIMIT 6";
		$result = $this->getConnection()->prepare($sql);
		$result->execute();
		return $result->fetchAll();
	}
}
?>