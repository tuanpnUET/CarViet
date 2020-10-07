<?php
require_once(ROOT.'Helper/Controller.php');
class ProductController extends Controller
{
    function index($maloai)
    {
        require(ROOT . 'Model/Product.php');
        $products = new Product();
        $this->data['products'] = $products->getAll($maloai);   
        $this->set($this->data);
        $this->render("index");
    }
    function detail($masanpham,$maloai)
    {
        require(ROOT . 'Model/Product.php');
        $products = new Product();
        $d['products'] = $products->getById($masanpham);
        $this->set($d);


         $products1 = new Product();
        $this->data['products1'] = $products1->splq($maloai,$masanpham);
        $this->set($this->data);
        $this->render("detail");
    }
    function add()
    {
        if (isset($_POST["tensanpham"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."Image/".$file_name);
            }
            require(ROOT . 'Model/Product.php');
            $products = new Product();
          

            if ($products->add($_POST["masanpham"], $_POST["Tensanpham"],$_POST['Gia'],$file_name,$_POST['Soluong'],$_POST['maloai']))
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

    function edit($masanpham)
    {
        require(ROOT . 'Model/Product.php');
        $Product= new Product();
        $d["Product"] = $Product->getById($masanpham);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d1['categories'] = $categories->getAll();
        $this->setvar2($d1);

        if (isset($_POST["masanpham"]))
        {
            
            $products = new Product();
            if ($products->edit($_POST["masanpham"], $_POST["tensanpham"],$_POST['gia'],$_POST['anh'],$_POST['Soluong']))
            {
               header("Location: " . WEBROOT."index.php/Product/index/ALL/1" );
            }
        }
       

      
        $this->render("edit");
    }

    function delete($masanpham)
    {
        require(ROOT . 'Model/Product.php');

        $products = new Product();
        if ($products->delete($masanpham))
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