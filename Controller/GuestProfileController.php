    <?php
require_once(ROOT.'Helper/Controller.php');
class CartAdminController extends Controller
{
    function index($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');
        $cartsadmin = new CartAdmin();
        $this->data['cartsadmin'] = $cartsadmin->getAll($sohoadon);   
        $this->set($this->data);
        $this->render("index");
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
     function duyetdon($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $cartsadmin = new CartAdmin();
        if ($cartsadmin->duyetdon($sohoadon))
        {
           header("Location: " . WEBROOT."index.php/CartAdmin/index/ALL/1" );
        }
    }
    function chuanbihang($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $cartsadmin = new CartAdmin();
        if ($cartsadmin->chuanbihang    ($sohoadon))
        {
           header("Location: " . WEBROOT."index.php/CartAdmin/index/ALL/1" );
        }
    }
    function giaohang($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $cartsadmin = new CartAdmin();
        if ($cartsadmin->giaohang($sohoadon))
        {
           header("Location: " . WEBROOT."index.php/CartAdmin/index/ALL/1" );
        }
    }
    function hoanthanh($sohoadon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $cartsadmin = new CartAdmin();
        if ($cartsadmin->hoanthanh($sohoadon))
        {
           header("Location: " . WEBROOT."index.php/CartAdmin/index/ALL/1" );
        }
    }


     function add()
    {
        if (isset($_POST["maloai"]))
        {
            require(ROOT . 'Model/Category.php');

             $Categories = new Category();

            if ($Categories->add($_POST["maloai"],$_POST["tenloai"]))
            {
                header("Location: " . WEBROOT . "index.php/Category/index");
            }
        }

        $this->render("add");
    }

    function edit($sohoadon)
    {
        require(ROOT . 'Model/Category.php');
        $CartAdmin= new CartAdmin();

        $d["CartAdmin"] = $CartAdminController->getByID($sohoadon);

        if (isset($_POST["sohoadon"]))
        {
             $categories = new Category();
            if ($categories->edit($_POST['sohoadon']))
            {
               header("Location: " . WEBROOT."index.php/category/index" );
            }
        }
        $this->set($d);
        $this->render("edit");
    }



    
}

?>