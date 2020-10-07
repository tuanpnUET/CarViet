
<?php
require_once(ROOT.'Helper/Controller.php');
class CartController extends Controller
{
    function index($masanpham)
    {  
        //session_unset();
        require(ROOT . 'Model/Product.php');
        $product=new Product();
        // var_dump($masanpham) ;
    
        if(strlen($masanpham)>0)
        {
            // echo "dong nay co ma";
            $pr=$product->getById($masanpham);

            $new_product = array(
                            array('masanpham'=>$pr["masanpham"], 
                                'tensanpham'=>$pr["tensanpham"],
                                 'anh'=>$pr["anh"], 'gia'=>$pr["gia"],
                                 'Soluong'=>1)
                        );


            if(!isset($_SESSION["PRODUCTS"]))
            { 
                // nếu chưa có ss thì gán mới                
               $_SESSION["PRODUCTS"]= $new_product;

            }
            else
            { 
                //kiểm tra có sp trong giỏ chưa
                if($this->check($masanpham,$_SESSION["PRODUCTS"])==false)
                    $_SESSION["PRODUCTS"]=array_merge($_SESSION["PRODUCTS"],$new_product);
            }             
         }
         else echo "khong co ma";
        
        $this->render("index");
    }
    function Delete($i)
    {
        if(isset($_SESSION['PRODUCTS']))
        {
            $Array=$_SESSION['PRODUCTS'];
            array_splice($Array,$i-1,1);
            $_SESSION['PRODUCTS']=$Array;
            header("Location:".WEBROOT."index.php/Cart/index/");
        }

    }
   
    function Save()
    {
        
        require_once(ROOT . 'Model/Dondathang.php');
        $dondathang=new Dondathang();
        $dondathang->add($_POST["hoten"],$_POST["sdt"],$_POST["diachi"],$_POST["email"],$_POST["ghichu"]);
        $sohoadon=$dondathang->getSohoadonnew()["sohoadon"];
        
        //Them chi tiet dathang
        require_once(ROOT . 'Model/Chitietdathang.php');
        $chitietdathang=new Chitietdathang();
        
        foreach($_SESSION["PRODUCTS"] as $cart_itm)
        {   
            
            if($chitietdathang->add($sohoadon,$cart_itm["masanpham"],$cart_itm["soluong"],$cart_itm["gia"]))
             echo "Them thanh cong";
               header("Location:".WEBROOT."index.php/loi/$sohodon");

        }
        header("Location:".WEBROOT."index.php/Oder/detail/".$sohoadon);
        unset($_SESSION['PRODUCTS']);
        
        

    }
    function check($masanpham, $dssp){
        foreach($dssp as $sp){
            if($sp["masanpham"]==$masanpham)
                return true;
        }
        return false;
    }
}
?>