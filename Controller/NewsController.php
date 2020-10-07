<?php
require_once(ROOT.'Helper/Controller.php');
class NewsController extends Controller
{
    function index($matintuc)
    {
        require(ROOT . 'Model/News.php');
        $newss = new News();
        $d['newss'] = $newss->getAll($matintuc);
        $this->set($d);
        $this->render("index");
    }
    function detail($matintuc)
    {
        require(ROOT . 'Model/News.php');
        $newss = new News();
        $d['newss'] = $newss->getById($matintuc);
        $this->set($d);
        $this->render("detail");
    }
    function add()
    {
        if (isset($_POST["tentintuc"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."Image/".$file_name);
            }
            require(ROOT . 'Model/New.php');
            $newss = new News();
          

            if ($products->add($_POST["matintuc"], $_POST["tentintuc"],$_POST['noidungtin'],$_POST['maloaitintuc']))
            {
                header("Location: " . WEBROOT."index.php/News/index/ALL/1" );
            }
            else
                header("Location:".WEBROOT."loi.php");
        }
        require_once(ROOT . 'Model/Category.php');
        $CategoriesTinTuc = new CategoriesTinTuc();
        $d['CategoriesTinTuc'] = $CategoriesTinTuc->getAll();
        $this->setvar2($d);
        $this->render("add");
    }

    function edit($matintuc)
    {
        require(ROOT . 'Model/News.php');
        $News= new News();
        $d["News"] = $News->getById($matintuc);  
        $this->set($d);
        
        require_once(ROOT . 'Model/Category.php');
        $CategoriesTinTuc = new CategoriesTinTuc();
        $d1['CategoriesTinTuc'] = $CategoriesTinTuc->getAll();
        $this->setvar2($d1);

        if (isset($_POST["matintuc"]))
        {
            
            $newss = new News();
            if ($products->edit($_POST['matintuc'], $_POST['tentintuc'],$_POST['noidungtin'],$_POST['anh']));
            {
               header("Location: " . WEBROOT."index.php/News/index/ALL/1" );
            }
        }
        $this->render("edit");
    }

    function delete($matintuc)
    {
        require(ROOT . 'Model/News.php');

        $Newss = new News();
        if ($News->delete($matintuc))
        {
           header("Location: " . WEBROOT."index.php/New/index/ALL/1" );
        }
    }
}
?>