<?php
require_once(ROOT.'Helper/Controller.php');
class ListProductController extends Controller
{
    function index($maloaixe)
    {
        require(ROOT . 'Model/ListProduct.php');
        $listproducts = new ListProduct();
        $this->data['listproducts'] = $listproducts->getAll($maloaixe);   
        $this->set($this->data);
        $this->render("index");
    }
  
    function add()
    {
        if (isset($_POST["maloaixe"]))
        {
            
            require(ROOT . 'Model/ListProduct.php');
            $listproducts = new ListProduct();
          

            if ($listproducts->add($_POST["maloaixe"], $_POST["tenloaixe"]))
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

    function edit($maloaixe)
    {
        require(ROOT . 'Model/ListProduct.php');
        $listproducts= new ListProduct();
        $d["ListProduct"] = $listproducts->getById($maloaixe);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d1['categories'] = $categories->getAll();
        $this->setvar2($d1);

        if (isset($_POST["maloaixe"]))
        {
            
            $listproducts = new ListProduct();
            if ($listproducts->edit($_POST["maloaixe"], $_POST["tenloaixe"],$_POST['anhloai']))
            {
               header("Location: " . WEBROOT."index.php/ListProduct/index/ALL/1" );
            }
        }      
        $this->render("edit");
    }

    function delete($maloaixe)
    {
        require(ROOT . 'Model/ListProduct.php');

        $listproducts = new ListProduct();
        if ($listproducts->delete($maloaixe))
        {
           header("Location: " . WEBROOT."index.php/ListProduct/index/ALL/1" );
        }
    }
}
?>