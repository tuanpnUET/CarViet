<?php
require_once(ROOT.'Helper/Controller.php');
class OderController extends Controller
{
    function index($taikhoan)
    {
        require(ROOT . 'Model/Oder.php');
        $Oders = new Oder();
        $this->data['Oders'] = $Oders->getAll($taikhoan);   
        $this->set($this->data);
        $this->render("index");
    }
    function detail($sohoadon)
    {
        require(ROOT . 'Model/Oder.php');
        $Oders = new Oder();
        $this->data['Oders'] = $Oders->getById($sohoadon);   
        $this->set($this->data);
        $this->render("detail");
    }
    function huy($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $cartsadmin = new CartAdmin();
        if ($cartsadmin->huy($sohoadon))
        {
           header("Location: " . WEBROOT."index.php/CartAdmin/index/ALL/1" );
        }
    }
    
    function huy1($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $cartsadmin = new CartAdmin();
        if ($cartsadmin->huy1($sohoadon))
        {
           header("Location: " . WEBROOT."index.php/CartAdmin/detail/".$sohoadon."" );
        }
    }

   
}
?>