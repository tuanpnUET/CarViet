
<?php
require_once(ROOT.'Helper/Controller.php');
class CartController extends Controller
{
    function index($maxe)
    {  
        //session_unset();
        require(ROOT . 'Model/Product.php');
        $product=new Product();
    
        if(strlen($maxe)>0)
        {
            $pr=$product->getById($maxe);
            $new_product = array(
                            array('maxe'=>$pr["maxe"], 
                                'tendongxe'=>$pr["tendongxe"],
                                 'anh'=>$pr["anh"], 'gia'=>$pr["gia"])
                        );


            if(!isset($_SESSION["PRODUCTS"])){               
               $_SESSION["PRODUCTS"]= $new_product;
            }
            else
            { 
                if($this->check($maxe,$_SESSION["PRODUCTS"])==false)
                    $_SESSION["PRODUCTS"]=array_merge($_SESSION["PRODUCTS"],$new_product);
            }             
         }        
        $this->render("index");
    }
    function Delete($i)
    {
        if(isset($_SESSION['PRODUCTS']))
        {
            $Array=$_SESSION['PRODUCTS'];
            array_splice($Array,$i-1,1);
            $_SESSION['PRODUCTS']=$Array;
            header("Location:".WEBROOT."index.php/Home/index");
        }

    }
   
    function Save()
    {
        require_once(ROOT . 'Model/DatHen.php');
        $dathen=new DatHen();
        $dathen->add($_POST["hoten"],$_POST["sdt"],$_POST["cmnd"],$_POST["email"],$_POST["ngayhen"],$_POST["diachi"],$_POST["ghichu"]);
        $madon=$dathen->getDonMoi()["madon"];
        
        //Them chi tiet dathang
        require_once(ROOT . 'Model/ChiTietDon.php');
        $chitietdon = new ChiTietDon();
        
        foreach($_SESSION["PRODUCTS"] as $cart_itm){   
            if($chitietdon->add($madon,$cart_itm["maxe"],$cart_itm["gia"]))
               header("Location:".WEBROOT."index.php/loi/$madon");
        }
        //dathangthanhcong
        header("Location:".WEBROOT."index.php/Home/index");
        unset($_SESSION['PRODUCTS']);      

    }
    function check($maxe, $dssp){
        foreach($dssp as $sp){
            if($sp["maxe"]==$maxe)
                return true;
        }
        return false;
    }
}
?>