<?php
require_once(ROOT.'Helper/Controller.php');
class CategoryTinTucController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/CategoryTinTuc.php');

        $CategoriesTinTuc = new CategoryTinTuc();

        $this->data['CategoriesTinTuc'] = $CategoriesTinTuc->getAll();
        $this->set($this->data);
        $this->render("index");
    }

    function add()
    {
        if (isset($_POST["maloai"]))
        {
            require(ROOT . 'Model/CategoryTinTuc.php');

             $CategoriesTinTuc = new CategoryTinTuc();

            if ($CategoriesTinTuc->add($_POST['matintuc'],$_POST['maloaitintuc'],$_POST['tentintuc'],$_POST['noidungtin'],$_POST['anh']))
            {
                header("Location: " . WEBROOT . "index.php/news/index");
            }
        }

        $this->render("add");
    }

    function edit($matintuc)
    {
        require(ROOT . 'Model/CategoryTinTuc.php');
        $CategoryTin= new CategoryTinTuc();

        $d["CategoryTin"] = $CategoryTin->getByID($matintuc);

        if (isset($_POST["matintuc"]))
        {
             $CategoriesTinTuc = new CategoryTinTuc();
            if ($CategoriesTinTuc->edit($_POST['matintuc'],$_POST['maloaitintuc'],$_POST['tentintuc'],$_POST['noidungtin']))
            {
               header("Location: " . WEBROOT."index.php/news/index" );
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($maloai)
    {
        require(ROOT . 'Model /CategoryTinTuc.php');

        $CategoriesTinTuc = new CategoryTinTuc();
        if ($CategoriesTinTuc->delete($maloai))
        {
            header("Location: " . WEBROOT . "index.php/news/index");
        }
    }
}
?>