<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class NewsAdmin extends Database {
        // private static $ocon=null;
        // public function_contruct()
        // {
        //  $ocon=$this->getConnection();
        // }    
        public function getAll($matintuc){
            
            $sql = "SELECT * FROM tintuc";
            if($matintuc!="ALL")
                $sql="SELECT * FROM tintuc where matintuc='".$matintuc."'";
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
       public function add($matintuc,$maloaitintuc,$tentintuc,$noidungtin,$anh)
        {
            
            $sql = " INSERT INTO tintuc (matintuc, maloaitintuc, tentintuc, noidungtin,anh) VALUES ('".$matintuc."','".$maloaitintuc."', '".$tentintuc."', '".$noidungtin."', '".$anh."')";
          
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function edit($matintuc,$maloaitintuc,$tentintuc,$noidungtin,$anh){
            $sql=" UPDATE tintuc SET matintuc = '".$matintuc."', maloaitintuc = '".$maloaitintuc."', tentintuc ='".$tentintuc."', noidungtin = '".$noidungtin."', anh = '".$anh."' WHERE tintuc.matintuc = '".$matintuc."'" ;


            // echo $sql;
            
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