<?php
require_once(ROOT.'Helper/Controller.php');
class CategoryController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/Category.php');

        $Categories = new Category();

        $this->data['Categories'] = $Categories->getAll();
        $this->set($this->data);
        $this->render("index");
    }

    function add()
    {
        if (isset($_POST["maloaixe"]))
        {
            require(ROOT . 'Model/Category.php');

             $Categories = new Category();

            if ($Categories->add($_POST["maloaixe"],$_POST["tenloaixe"]))
            {
                header("Location: " . WEBROOT . "index.php/Category/index");
            }
        }

        $this->render("add");
    }

    function edit($id)
    {
        require(ROOT . 'Model/Category.php');
        $Category= new Category();

        $d["Category"] = $Category->getByID($id);

        if (isset($_POST["maloaixe"]))
        {
             $categories = new Category();
            if ($categories->edit($_POST['maloaixe'],$_POST['tenloaixe']))
            {
               header("Location: " . WEBROOT."index.php/category/index" );
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($maloaixe)
    {
        require(ROOT . 'Model /Category.php');

        $Categories = new Category();
        if ($Categories->delete($maloaixe))
        {
            header("Location: " . WEBROOT . "index.php/Category/index");
        }
    }
}
?>