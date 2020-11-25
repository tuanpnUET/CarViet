<?php
require_once(ROOT.'Helper/Controller.php');
class ProductController extends Controller
{
    function index($maloaixe)
    {
        require(ROOT . 'Model/Product.php');
        $products = new Product();
        $this->data['products'] = $products->getAll($maloaixe);   
        $this->set($this->data);
        $this->render("index");
    }
    function detail($maxe,$maloaixe)
    {
        require(ROOT . 'Model/Product.php');
        $products = new Product();
        $d['products'] = $products->getById($maxe);
        $this->set($d);

        $products1 = new Product();
        $this->data['products1'] = $products1->splq($maloaixe,$maxe);
        $this->set($this->data);
        $this->render("detail");
    }
    function add()
    {
        if (isset($_POST["tendongxe"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."image/".$file_name);
            }
            require(ROOT . 'Model/Product.php');
            $products = new Product();
          

            if ($products->add($_POST["maxe"], $_POST["tendongxe"],$_POST['Gia'],$file_name,$_POST['Soluong'],$_POST['maloaixe']))
            {
                header("Location: " . WEBROOT."index.php/Product/index/ALL/1" );
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

    function edit($maxe)
    {
        require(ROOT . 'Model/Product.php');
        $Product= new Product();
        $d["Product"] = $Product->getById($maxe);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d1['categories'] = $categories->getAll();
        $this->setvar2($d1);

        if (isset($_POST["maxe"]))
        {
            
            $products = new Product();
            if ($products->edit($_POST["maxe"], $_POST["tendongxe"],$_POST['gia'],$_POST['anh'],$_POST['Soluong']))
            {
               header("Location: " . WEBROOT."index.php/Product/index/ALL/1" );
            }
        }
       

      
        $this->render("edit");
    }

    function delete($maxe)
    {
        require(ROOT . 'Model/Product.php');

        $products = new Product();
        if ($products->delete($maxe))
        {
           header("Location: " . WEBROOT."index.php/Product/index/ALL/1" );
        }
    }
     function abc()
    {
       require(ROOT . 'Model/Product.php');
        
        if(isset($_POST['contentsearch']))
        {
            $products = new Product();
             $this->data['products'] = $products->find($_POST['contentsearch']);   
            $this->set($this->data);
              $this->render("index");
          }
        
        
     }   
    }
    
?>