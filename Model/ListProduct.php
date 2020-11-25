<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ListProduct extends Database {
        // private static $ocon=null;
        // public function_contruct()
        // {
        //  $ocon=$this->getConnection();
        // }    
        public function getAll($maloaixe){
            
            $sql = "SELECT * FROM loaixe";
            if($maloaixe!="ALL")
                $sql="SELECT * FROM loaixe where maloaixe='".$maloaixe."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();

        }
        public function getById($maloaixe){
            
            $sql = "SELECT * FROM loaixe where maloaixe='".$maloaixe."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();

        }
       public function add($maloaixe,$tenloaixe)
        {
            
            $sql = "INSERT INTO loaixe(maloaixe,tenloaixe) VALUES ('".$maloaixe."','".$tenloaixe."')";
          
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function edit($maloaixe,$tenloaixe,$anhloai){
            $sql="UPDATE loaixe SET tenloaixe = '".$tenloaixe."', anhloai = '".$anhloai."' WHERE loaixe.maloaixe = '".$maloaixe."'" ;
                
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function delete($maloaixe){
            $sql="DELETE FROM loaixe where maloaixe='".$maloaixe."'" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        
    }
  ?>