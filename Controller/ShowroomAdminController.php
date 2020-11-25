<?php
require_once(ROOT.'Helper/Controller.php');
class ShowroomAdminController extends Controller
{

    function add(){
        require(ROOT . 'Model/ShowroomAdmin.php');
        $ShowroomAdmin = new ShowroomAdmin();
        if ($ShowroomAdmin->add($_POST["tenshowroom"],$_POST["diachi"],$_POST["hotline"]))
            {
                header("Location: " . WEBROOT . "index.php/Showroom/index");
            }

        $this->render("add");
    }

    function edit($id){
        require(ROOT . 'Model/ShowroomAdmin.php');
        $ShowroomAdmin = new ShowroomAdmin();

        $d["ShowroomAdmin"] = $ShowroomAdmin->getByID($id);

        if (isset($_POST["id"]))
        {
             $ShowroomAdmin = new ShowroomAdmin();
            if ($ShowroomAdmin->edit($_POST["tenshowroom"],$_POST["diachi"],$_POST["hotline"]))
            {
               header("Location: " . WEBROOT."index.php/Showroom/index" );
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Model /ShowroomAdmin.php');

        $ShowroomAdmin = new ShowroomAdmin();
        if ($ShowroomAdmin->delete($id))
        {
            header("Location: " . WEBROOT . "index.php/Showroom/index");
        }
    }
}
?>