#<?php
require_once(ROOT.'Helper/Controller.php');
class ProductAdminController extends Controller
{
    function index($maloai)
    {
        require(ROOT . 'Model/ProductAdmin.php');
        $productsadmin = new ProductAdmin();
        $this->data['productsadmin'] = $productsadmin->getAll($maloai);   
        $this->set($this->data);
        $this->render("index");
    }
  
    function add()
    {
        if (isset($_POST["masanpham"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."Image/".$file_name);
            }
            require(ROOT . 'Model/ProductAdmin.php');
            $productsadmin = new ProductAdmin();
          

            if ($productsadmin->add($_POST["masanpham"],$_POST["maloai"], $_POST["tensanpham"],$_POST["gia"],$file_name,$_POST['loaisanpham'],$_POST["dangbaoche"],$_POST["quycachsanpham"],$_POST["hamluong"],$_POST["thanhphan"],$_POST["congdung"],$_POST["doituong"],$_POST["cachdung"],$_POST["luuy"],$_POST["baoquan"],$_POST["hansudung"]))
            {
                header("Location: " . WEBROOT."index.php/ProductAdmin/index/ALL/1" );
            }
            else
            {

                header("Location:".WEBROOT."loi.php");
            }
        }
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d['categories'] = $categories->getAll();
        $this->setvar2($d);
        $this->render("add");
    }

    function edit($masanpham)
    {
        require(ROOT . 'Model/ProductAdmin.php');
        $productsadmin= new ProductAdmin();
        $d["ProductAdmin"] = $productsadmin->getById($masanpham);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $categories = new Category();
        $d1['categories'] = $categories->getAll();
        $this->setvar2($d1);

        if (isset($_POST["masanpham"]))
        {
            
            $productsadmin = new ProductAdmin();
            if ($productsadmin->edit($_POST["masanpham"], $_POST["tensanpham"],$_POST['gia'],$_POST['anh'],$_POST['loaisanpham'],$_POST["dangbaoche"],$_POST["quycachsanpham"],$_POST["hamluong"],$_POST["thanhphan"],$_POST["congdung"],$_POST["doituong"],$_POST["cachdung"],$_POST["luuy"],$_POST["baoquan"],$_POST["hansudung"]))
            {
               header("Location: " . WEBROOT."index.php/ProductAdmin/index/ALL/1" );
            }
        }      
        $this->render("edit");
    }

    function delete($masanpham)
    {
        require(ROOT . 'Model/ProductAdmin.php');

        $productsadmin = new ProductAdmin();
        if ($productsadmin->delete($masanpham))
        {
           header("Location: " . WEBROOT."index.php/ProductAdmin/index/ALL/1" );
        }
    }
}
?>