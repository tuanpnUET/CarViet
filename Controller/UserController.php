<?php
require_once(ROOT.'Helper/Controller.php');
class UserController extends Controller
{
    public function __construct(){
        parent::__construct();
        // echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
        //     print_r($this);
        // echo '</pre>';
    }

    function index()
    {
        require(ROOT . 'Model/User.php');
        $users = new User();

        $this->data['users'] = $users->getAll();
        $this->set($this->data);
        $this->render("index");
    }

    function logout()
    {
         
        session_destroy();
        header('location:'.WEBROOT);
        //header('location:'.WEBROOT."index.php/category/index");
    }

    function login()
    {
        if(isset($_POST["taikhoan"]))
        {
            
            require(ROOT . 'Model/User.php');
            $users = new User();
            if($users->login($_POST['taikhoan'],$_POST['matkhau']))
            {
                $_SESSION["user"]=$_POST['taikhoan'];
                $us=$users->login($_POST['taikhoan'],$_POST['matkhau']);
                $_SESSION["quyen"]=$us["quyen"];
                //header("location:".$_SESSION["user"]);
                header('location:'.WEBROOT."");
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert('Bạn nhập sai tài khoản hoặc mật khẩu.');
                </script>
                <?php  
            }

        }



        // echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
        //     print_r($this);
        // echo '</pre>';
        $this->render("login");
    }

    function add()
    {
        if(isset($_POST["taikhoan"]))
        {
            require(ROOT . 'Model/User.php');

             $users = new User();

            if($users->add($_POST["taikhoan"], $_POST["matkhau"]))
            {
                header("Location: " . WEBROOT );
            }
        }

        $this->render("add");
    }

  function reg()
    {
        if(isset($_POST["taikhoan"]))
        {
            require(ROOT . 'Model/User.php');

            $users = new User();
            $tkdk=$_POST["taikhoan"];
            // $kiemtra=getBytaikhoan($tkdk);
            // if ($kiemtra) {
            //     echo "haha";
            // }
            if($users->reg($_POST["taikhoan"], $_POST["matkhau"]))
            {
                header('location:'.WEBROOT.'index.php/User/login/');
            }
            elseif(isset($_POST["taikhoan"]))
            {
                ?>
                <script type="text/javascript">
                    alert('Tài khoản đã tồn tại');
                </script>
             <?php      
            }
        }

        $this->render("reg");
    }
    function edit($id)
    {
        require(ROOT . 'Model/User.php');
        $User= new User();

        $d["User"] = $User->getById($id);

        if (isset($_POST["taikhoan"]))
        {
            $users = new User();
            if ($users->edit($_POST['taikhoan'], $_POST['matkhau'],$id))
            {
                header("Location: " . WEBROOT ."index.php/User/index" );
            }
        }
        $this->set($d);
        $this->render("edit");
    }

   function doimatkhau($id)
    {
        require(ROOT . 'Model/User.php');
        $users = new User();
        // $d["user"] = $users->getById($id);
        // $taikhoan=$_POST['taikhoan'];
        // $matkhaumoi=$_POST['matkhaumoi'];
        if(isset($_POST["taikhoan"]))
        {
            if($users->login($_POST['taikhoan'],$_POST['matkhaucu']))
            {
                if ($users->doimatkhau($_POST['taikhoan'],$_POST['matkhaumoi']))
                {
                    header("Location: " . WEBROOT ."index.php/Home/index" );
                    // echo "haha";
                }  
                // $users->doimatkhau($_POST['taikhoan'],$_POST['matkhaumoi']);
                // echo $_POST['matkhaumoi'];
            }
            else
            { ?>
               <script type="text/javascript">
                alert('Bạn nhập sai mật khẩu hiện tại xin vui lòng nhập lại!.');
            </script>
            <?php } 
        }
        // $this->set($d);
        $this->render("doimatkhau");
    }

    function delete($id)
    {
        require(ROOT . 'Model/User.php');

        $User = new User();
        if ($User->delete($id))
        {
            header("Location: " . WEBROOT . "index.php/User/index");
        }
    }
}
?>