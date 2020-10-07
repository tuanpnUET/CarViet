    <?php
require_once(ROOT.'Helper/Controller.php');
class NewsAdminController extends Controller
{
    function index($matintuc)
    {
        require(ROOT . 'Model/NewsAdmin.php');
        $newssadmin = new NewsAdmin();
        $this->data['newssadmin'] = $newssadmin->getAll($matintuc);   
        $this->set($this->data);
        $this->render("index");
    }
  
    function add()
    {
        if (isset($_POST["matintuc"]))
        {
            if(isset($_FILES['anh'])){
            $file_name = $_FILES['anh']['name'];
            $file_tmp =$_FILES['anh']['tmp_name'];
             move_uploaded_file($file_tmp,ROOT."Image/".$file_name);
            }
            require(ROOT . 'Model/NewsAdmin.php');
            $newssadmin = new NewsAdmin();
          

            if ($newssadmin->add($_POST["matintuc"], $_POST["maloaitintuc"],$_POST['tentintuc'],$_POST['noidungtin'],$file_name))
            {
                header("Location: " . WEBROOT."index.php/NewsAdmin/index/ALL/1" );
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

    function edit($matintuc)
    {
        require(ROOT . 'Model/NewsAdmin.php');
        $newssadmin= new NewsAdmin();
        $d["NewsAdmin"] = $newssadmin->getById($matintuc);  
        $this->set($d);
        require_once(ROOT . 'Model/CategoryTinTuc.php');
        $CategoriesTinTuc = new CategoryTinTuc();
        $d1['CategoriesTinTuc'] = $CategoriesTinTuc->getAll();
        $this->setvar2($d1);
       

        if (isset($_POST["matintuc"]))
        {
        //      echo "<br>";
        // echo $_POST["matintuc"];
        // echo "<br>";
        //                 print_r($_POST);

            $newssadmin = new NewsAdmin();
            if ($newssadmin->edit($_POST["matintuc"], $_POST["maloaitintuc"],$_POST['tentintuc'],$_POST['anh'],$_POST['noidungtin']))
                
            {
               header("Location: " . WEBROOT."index.php/NewsAdmin/index/ALL/1" );
            }
        }      
        $this->render("edit");
    }

    function delete($matintuc)
    {
        require(ROOT . 'Model/NewsAdmin.php');

        $newssadmin = new NewsAdmin();
        if ($newssadmin->delete($matintuc))
        {
           header("Location: " . WEBROOT."index.php/NewsAdmin/index/ALL/1" );
        }
    }
}
?>