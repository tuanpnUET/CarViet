<?php
require_once(ROOT.'Helper/Controller.php');
class ShowroomController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/Showroom.php');

        $Showrooms = new Showroom();

        $this->data['Showrooms'] = $Showrooms->getAll();
        $this->set($this->data);
        $this->render("index");
    }

    function add(){
        require(ROOT . 'Model/Showroom.php');
        $Showroom = new Showroom();
        if ($Showroom->add($_POST["tenshowroom"],$_POST["diachi"],$_POST["hotline"]))
            {
                header("Location: " . WEBROOT . "index.php/Showroom/index");
            }

        $this->render("add");
    }

    function edit($id){
        require(ROOT . 'Model/Showroom.php');
        $Showroom = new Showroom();

        $d["Showroom"] = $Showroom->getByID($id);

        if (isset($_POST["id"]))
        {
             $Showroom = new Showroom();
            if ($Showroom->edit($_POST["tenshowroom"],$_POST["diachi"],$_POST["hotline"]))
            {
               header("Location: " . WEBROOT."index.php/Showroom/index" );
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Model /Showroom.php');

        $Showroom = new Showroom();
        if ($Showroom->delete($maloaixe))
        {
            header("Location: " . WEBROOT . "index.php/Showroom/index");
        }
    }
}
?>