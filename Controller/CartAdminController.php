    <?php
require_once(ROOT.'Helper/Controller.php');
class CartAdminController extends Controller
{
    function index($madon)
    {
        require(ROOT . 'Model/CartAdmin.php');
        $cartsadmin = new CartAdmin();
        $this->data['cartsadmin'] = $cartsadmin->getAll($madon);   
        $this->set($this->data);
        $this->render("index");
    }
    function edit($madon)
    {
        require(ROOT . 'Model/CartAdmin.php');
        $CartAdmin= new CartAdmin();
        $d["CartAdmin"] = $CartAdmin->getByID($madon);

        if (isset($_POST["madon"]))
        {
             $CartAdmin = new CartAdmin();
            if ($CartAdmin->edit($_POST['madon'],$_POST['trangthai']))
            {
               header("Location: " . WEBROOT."index.php/CartAdmin/index/ALL/1" );
            }
        }
        $this->set($d);
        $this->render("edit");
    } 
    function delete($madon)
    {
        require(ROOT . 'Model/CartAdmin.php');

        $CartAdmin = new CartAdmin();
        if ($CartAdmin->delete($madon))
        {
            header("Location: " . WEBROOT . "index.php/CartAdmin/index/ALL/1");
        }
    }   
}

?>