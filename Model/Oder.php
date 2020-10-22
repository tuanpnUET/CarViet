<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Oder extends Database{
    public function getAll($taikhoan){
            
            $sql = "SELECT * FROM chitietdonhang INNER JOIN dondathang ON chitietdonhang.sohoadon = dondathang.sohoadon INNER JOIN sanpham ON sanpham.masanpham = chitietdonhang.masanpham where taikhoan='".$_SESSION["user"]."' GROUP BY  chitietdonhang.sohoadon";
            
           // echo $sql;
           // die();
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();
        }
        public function getById($sohoadon){
            $sql = "SELECT * FROM chitietdonhang INNER JOIN dondathang ON chitietdonhang.sohoadon = dondathang.sohoadon INNER JOIN sanpham ON sanpham.masanpham = chitietdonhang.masanpham where chitietdonhang.sohoadon='".$sohoadon."'" ;
                    // echo $sql;
                    // die();
             // $sql = "SELECT * FROM chitiet where sohoadon='".$sohoadon."'";
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchALL();
        }
    
         public function huy($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Đã Hủy Đơn' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
    
         public function huy1($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Đã Hủy Đơn' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
    }
    //$t=new Category();

    //echo $t->add('L01','Nuoc uong','nuoc uong');
        
        
  ?>