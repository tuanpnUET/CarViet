<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ListProduct extends Database {
        // private static $ocon=null;
        // public function_contruct()
        // {
        //  $ocon=$this->getConnection();
        // }    
        public function getAll($maloai){
            
            $sql = "SELECT * FROM loaisanpham";
            if($maloai!="ALL")
                $sql="SELECT * FROM loaisanpham where maloai='".$maloai."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();

        }
        public function getById($maloai){
            
            $sql = "SELECT * FROM loaisanpham where maloai='".$maloai."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();

        }
       public function add($maloai,$tenloai)
        {
            
            $sql = "INSERT INTO loaisanpham(maloai,tenloai) VALUES ('".$maloai."','".$tenloai."')";
          
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function edit($maloai,$tenloai,$anhloai){
            $sql="UPDATE loaisanpham SET tenloai = '".$tenloai."', anhloai = '".$anhloai."' WHERE loaisanpham.maloai = '".$maloai."'" ;
                
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function delete($maloai){
            $sql="DELETE FROM loaisanpham where maloai='".$maloai."'" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        
    }
  ?>