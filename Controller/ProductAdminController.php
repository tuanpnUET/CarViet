<?php
require_once(ROOT.'Helper/Controller.php');
Class ProductAdminController extends Controller{
    function index()
    {
        require(ROOT . 'Model/ProductAdmin.php');
        $productsadmin = new ProductAdmin();
        $this->data['productsadmin'] = $productsadmin->getAll();
        $this->set($this->data);
        $this->render("index");
    }
  
    function add()
    {
        if (isset($_POST["maxe"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."Image/".$file_name);
            }
            require(ROOT . 'Model/ProductAdmin.php');
            $productsadmin = new ProductAdmin();
          

            if ($productsadmin->add($_POST["maxe"],$_POST["maloaixe"], $_POST["tendongxe"],$_POST["gia"],$_POST['anh'],$_POST['mota']))
            {
                header("Location: " . WEBROOT."index.php/ProductAdmin/index/ALL/1" );
            }
        }
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d['categories'] = $categories->getAll();
        $this->setvar2($d);
        $this->render("add");
    }

    function edit($maxe)
    {
        require(ROOT . 'Model/ProductAdmin.php');
        $productsadmin= new ProductAdmin();
        $d["ProductAdmin"] = $productsadmin->getById($maxe);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d1['categories'] = $categories->getAll();
        $this->setvar2($d1);

        if (isset($_POST["maxe"]))
        {
            
            $productsadmin = new ProductAdmin();
            if ($productsadmin->edit($_POST["maxe"],$_POST['maloaixe'], $_POST["tendongxe"],$_POST['gia'],$_POST['anh'],$_POST['mota']))
            {
               header("Location: " . WEBROOT."index.php/ProductAdmin/index/ALL/1" );
            }
        }      
        $this->render("edit");
    }

    function delete($maxe)
    {
        require(ROOT . 'Model/ProductAdmin.php');
        $productsadmin = new ProductAdmin();
        if ($productsadmin->delete($maxe))
        {
           header("Location: " . WEBROOT."index.php/ProductAdmin/index/ALL/1" );
        }
    }
}
?>