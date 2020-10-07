<?php
require_once(ROOT.'Helper/Controller.php');
class ListNewController extends Controller
{   
    function index($maloaitintuc)
    {
        require(ROOT . 'Model/ListNew.php');
        $listnews = new ListNew();
        $this->data['listnews'] = $listnews->getAll($maloaitintuc);   
        $this->set($this->data);
        $this->render("index");
    }
  
    function add()
    {
        if (isset($_POST["maloaitintuc"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."Image/".$file_name);
            }
            require(ROOT . 'Model/ListNew.php');
            $listnews = new ListNew();
          

            if ($listnews->add($_POST["maloaitintuc"], $_POST["tenloaitintuc"]))
            {
                header("Location: " . WEBROOT."index.php/ListNew/index/ALL/1" );
            }
            else
                header("Location:".WEBROOT."loi.php");
        }
      require_once(ROOT . 'Model/CategoryTinTuc.php');
        $CategoriesTinTuc = new CategoryTinTuc();
        $d['CategoriesTinTuc'] = $CategoriesTinTuc->getAll();
        $this->setvar2($d);
        $this->render("add");
    }

    function edit($maloaitintuc)
    {
        require(ROOT . 'Model/ListNew.php');
        $listnews= new ListNew();
        $d["ListNew"] = $listnews->getById($maloaitintuc);  
        $this->set($d);
        
        require_once(ROOT . 'Model/CategoryTinTuc.php');
        $CategoriesTinTuc = new CategoryTinTuc();
        $d1['CategoriesTinTuc'] = $CategoriesTinTuc->getAll();
        $this->setvar2($d1);

        if (isset($_POST["maloaitintuc"]))
        {
            
            $listnews = new ListNew();
            if ($listnews->edit($_POST["maloaitintuc"], $_POST["tenloaitintuc"]))
            {

               header("Location: " . WEBROOT."index.php/ListNew/index/ALL/1" );
            }
        }      
        $this->render("edit");
    }

    function delete($maloaitintuc)
    {
        require(ROOT . 'Model/ListNew.php');

        $listnews = new ListNew();
        if ($listnews->delete($maloaitintuc))
        {
           header("Location: " . WEBROOT."index.php/Listnew/index/ALL/1" );
        }
    }
}
?>