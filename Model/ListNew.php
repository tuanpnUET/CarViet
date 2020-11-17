<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class ListNew extends Database {
        // private static $ocon=null;
        // public function_contruct()
        // {
        //  $ocon=$this->getConnection();
        // }    
        public function getAll($maloaitintuc){
            
            $sql = "SELECT * FROM loaitintuc";
            if($maloaitintuc!="ALL")
                $sql="SELECT * FROM loaitintuc where maloaitintuc='".$maloaitintuc."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();

        }
        public function getById($maloaitintuc){
            
            $sql = "SELECT * FROM loaitintuc where maloaitintuc='".$maloaitintuc."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();

        }
       public function add($maloaitintuc,$tenloaitintuc)
        {
            
            $sql = "INSERT INTO loaitintuc(maloaitintuc,tenloaitintuc) VALUES ('".$maloaitintuc."','".$tenloaitintuc."')";
           
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function edit($maloaitintuc,$tenloaitintuc){
            $sql=" UPDATE loaitintuc SET maloaitintuc = '".$maloaitintuc."', tenloaitintuc = ''".$tenloaitintuc."' WHERE loaitintuc.maloaitintuc = '".$maloaitintuc."';" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function delete($maloaitintuc){
            
            $sql="DELETE FROM loaitintuc where maloaitintuc='".$maloaitintuc."'" ;

            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
        }
        
    }
  ?>