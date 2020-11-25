<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class CartAdmin extends Database{
    public function getAll(){
            
            $sql = "SELECT * FROM chitietdon INNER JOIN dondathen ON chitietdon.madon = dondathen.madon INNER JOIN xe ON xe.maxe = chitietdon.maxe";
           // echo $sql;
           // die();
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();
        }
        public function getById($madon){
            $sql = "SELECT * FROM chitietdon INNER JOIN dondathen ON chitietdon.madon = dondathen.madon INNER JOIN xe ON xe.maxe = chitietdon.maxe where chitietdon.madon='".$madon."'";
             // $sql = "SELECT * FROM chitiet where sohoadon='".$sohoadon."'";

            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();
        }
        public function edit($madon, $trangthai){
            $sql="UPDATE dondathen SET trangthai='".$trangthai."' where madon='".$madon."'" ;
            $request=$this->getConnection()->prepare($sql);
            return $request->execute();
            
        }
        public function delete($madon)
        {
            $sql="DELETE * FROM dondathen WHERE madon ='".$madon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
    }        
  ?>