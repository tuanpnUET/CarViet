<?php
require_once(ROOT.'Helper/Controller.php');
class ListProductController extends Controller
{
    function index($maloai)
    {
        require(ROOT . 'Model/ListProduct.php');
        $listproducts = new ListProduct();
        $this->data['listproducts'] = $listproducts->getAll($maloai);   
        $this->set($this->data);
        $this->render("index");
    }
  
    function add()
    {
        if (isset($_POST["maloai"]))
        {
            
            require(ROOT . 'Model/ListProduct.php');
            $listproducts = new ListProduct();
          

            if ($listproducts->add($_POST["maloai"], $_POST["tenloai"]))
            {
                header("Location: " . WEBROOT."index.php/ListProduct/index/ALL/1" );
            }
            else
                header("Location:".WEBROOT."loi.php");
        }
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d['categories'] = $categories->getAll();
        $this->setvar2($d);
        $this->render("add");
    }

    function edit($maloai)
    {
        require(ROOT . 'Model/ListProduct.php');
        $listproducts= new ListProduct();
        $d["ListProduct"] = $listproducts->getById($maloai);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d1['categories'] = $categories->getAll();
        $this->setvar2($d1);

        if (isset($_POST["maloai"]))
        {
            
            $listproducts = new ListProduct();
            if ($listproducts->edit($_POST["maloai"], $_POST["tenloai"],$_POST['anhloai']))
            {
               header("Location: " . WEBROOT."index.php/ListProduct/index/ALL/1" );
            }
        }      
        $this->render("edit");
    }

    function delete($maloai)
    {
        require(ROOT . 'Model/ListProduct.php');

        $listproducts = new ListProduct();
        if ($listproducts->delete($maloai))
        {
           header("Location: " . WEBROOT."index.php/ListProduct/index/ALL/1" );
        }
    }
}
?>