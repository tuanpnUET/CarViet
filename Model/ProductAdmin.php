<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ProductAdmin extends Database {
        // private static $ocon=null;
        // public function_contruct()
        // {
        //  $ocon=$this->getConnection();
        // }    
        public function getAll($maloai){
            
            $sql = "SELECT * FROM sanpham";
            if($maloai!="ALL")
                $sql="SELECT * FROM sanpham where maloai='".$maloai."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();

        }
        public function getById($masanpham){
            
            $sql = "SELECT * FROM sanpham where masanpham='".$masanpham."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();

        }
        public function add($masanpham,$maloai,$tensanpham,$gia,$anh,$loaisanpham,$dangbaoche,$quycachsanpham,$hamluong,$thanhphan,$congdung,$doituong,$cachdung,$luuy,$baoquan,$hansudung){
            $sql = "INSERT INTO sanpham(masanpham,maloai,tensanpham,gia,anh,loaisanpham,dangbaoche,quycachsanpham,hamluong,thanhphan,congdung,doituong,cachdung,luuy,baoquan,hansudung) VALUES ('".$masanpham."','".$maloai."','".$tensanpham."','".$gia."','".$anh."','".$loaisanpham."','".$dangbaoche."','".$quycachsanpham."','".$hamluong."','".$thanhphan."','".$congdung."','".$doituong."','".$cachdung."','".$luuy."','".$baoquan."','".$hansudung."')";
          
           
         $request=Database::getConnection()->prepare($sql);
            return $request->execute();
            
            
        }
        public function edit($masanpham,$tensanpham,$anh,$soluong,$loaisanpham,$dangbaoche,$quycachsanpham,$hamluong,$thanhphan,$congdung,$doituong,$cachdung,$luuy,$baoquan,$hansudung){
            $sql="UPDATE sanpham SET tensanpham='".$tensanpham."',, anh='".$anh."',soluong=".$soluong.",loaisanpham=".$loaisanpham.",dangbaoche=".$dangbaoche.",quycachsanpham=".$quycachsanpham.",hamluong=".$hamluong.",thanhphan=".$thanhphan.",congdung=".$congdung.",doituong=".$doituong.",cachdung=".$cachdung.",luuy=".$luuy.",baoquan=".$baoquan.",hansudung=".$hansudung." where masanpham='".$masanpham."'" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function delete($masanpham){
            $sql="DELETE FROM sanpham where masanpham='".$masanpham."'" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
        }




        openssl_public_decrypt(data, decrypted, key)
        
    }
  ?>