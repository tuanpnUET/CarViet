<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class CartAdmin extends Database{
    public function getAll(){
            
            $sql = "SELECT * FROM chitietdonhang INNER JOIN dondathang ON chitietdonhang.sohoadon = dondathang.sohoadon INNER JOIN sanpham ON sanpham.masanpham = chitietdonhang.masanpham";
           // echo $sql;
           // die();
            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetchAll();
        }
        public function getById($sohoadon){
            $sql = "SELECT * FROM chitietdonhang INNER JOIN dondathang ON chitietdonhang.sohoadon = dondathang.sohoadon INNER JOIN sanpham ON sanpham.masanpham = chitietdonhang.masanpham where chitietdonhang.sohoadon='".$sohoadon."'";
             // $sql = "SELECT * FROM chitiet where sohoadon='".$sohoadon."'";

            $result = $this->getConnection()->prepare($sql);
            $result->execute();
            return $result->fetch();
        }
        public function duyetdon($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Chờ Lấy Hàng' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
         public function chuanbihang($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Đã Nhận Hàng' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();

        }
         public function giaohang($sohoadon)
        {


            $sql="UPDATE dondathang SET trangthai = 'Đang Giao Hàng' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
         public function hoanthanh($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Hoàn Thành' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
         public function huy($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Đã Hủy Đơn' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
         public function duyetdon1($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Chờ Lấy Hàng' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
         public function chuanbihang1($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Đã Nhận Hàng' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();

        }
         public function giaohang1($sohoadon)
        {


            $sql="UPDATE dondathang SET trangthai = 'Đang Giao Hàng' WHERE dondathang.sohoadon ='".$sohoadon."'";
            $request= $this->getConnection()->prepare($sql);
            return $request->execute();
        }
         public function hoanthanh1($sohoadon)
        {
            $sql="UPDATE dondathang SET trangthai = 'Hoàn Thành' WHERE dondathang.sohoadon ='".$sohoadon."'";
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