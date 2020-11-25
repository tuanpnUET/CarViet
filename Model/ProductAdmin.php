<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ProductAdmin extends Database {
        // private static $ocon=null;
        // public function_contruct()
        // {
        //  $ocon=$this->getConnection();
        // }    
        public function getAll(){
            
            $sql = "SELECT * FROM xe";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();

        }
        public function getById($maxe){
            
            $sql = "SELECT * FROM xe where maxe='".$maxe."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();

        }
        public function add($maxe,$maloaixe,$tendongxe,$gia,$anh,$mota){
            $sql = "INSERT INTO xe(maxe, maloaixe, tendongxe, gia, anh, mota) VALUES ('".$maxe."','".$maloaixe."','".$tendongxe."','".$gia."','".$anh."','".$mota."')";
            echo $sql;
            $request=Database::getConnection()->prepare($sql);
            return $request->execute();
            
            
        }
        public function edit($maxe,$maloaixe,$tendongxe,$gia,$anh,$mota){
            $sql="UPDATE xe SET tendongxe='".$tendongxe."', anh='".$anh."',maloaixe='".$maloaixe."',gia='".$gia."',mota='".$mota."' where maxe='".$maxe."'";
            // echo $sql;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function delete($maxe){
            $sql="DELETE FROM xe where maxe='".$maxe."'" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
        }
        
    }
  ?>