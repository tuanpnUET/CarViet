<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class News extends Database {
		// private static $ocon=null;
		// public function_contruct()
		// {
		// 	$ocon=$this->getConnection();
		// }	
		public function getAll($maloaitintuc){
			
			$sql = "SELECT * FROM tintuc";
			if($maloaitintuc!="ALL")
				$sql="SELECT * FROM tintuc where maloaitintuc='".$maloaitintuc."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getById($matintuc){
			
			$sql = "SELECT * FROM tintuc where matintuc='".$matintuc."'";
			$result = $this->getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function add($matintuc,$tentintuc,$anh,$noidungtin,$maloaitintuc)
		{
			
			$sql = "INSERT INTO tintuc(matintuc,tentintuc,anh,noidungtin,maloaitintuc) VALUES ('".$matintuc."','".$tentintuc."','".$anh."',".$noidungtin.",'".$maloaitintuc."')";
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
			
		}
		public function edit($matintuc,$tentintuc,$noidungtin,$anh){
			$sql="UPDATE tintuc SET tentintuc='".$tentintuc."', noidungtin=".$noidungtin.", anh='".$anh."' where matintuc='".$maloaitintuc."'" ;
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
			
		}
		public function delete($matintuc){
			$sql="DELETE FROM tintuc where matintuc='".$matintuc."'" ;
			$request=$this->getConnection()->prepare($sql);
			return $request->execute();
		}
		
		
	}
  ?>