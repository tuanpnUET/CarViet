<div  id="right" class=" col-12 col-xs-12 col-lg-12">
<div id="sanpham" class="col-12 col-xs-12 col-lg-12">
    <h3>
        Các mẫu xe hot:
    </h3>
    <ul>
        <?php
        $tongsobanghi=count($products);
        $s_bghimoitrang=8;
        $start=0;
        $maloaixe="ALL";
        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
            $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
            $Maloai=$explode_url[count($explode_url)-2];
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {
            if($i%4==1) echo "<div class='row'>";
        
            echo "<li class='col-lg-3 col-6'>";
            echo "<a href='".WEBROOT."index.php/product/detail/".$products[$j]['maxe']."/".$products[$j]['maloaixe']."'><img  class='resizeImage' src='".WEBROOT."image/".$products[$j]['anh']."' ></a>";
            
            echo "<a href='".WEBROOT."index.php/product/detail/".$products[$j]['maxe']."/".$products[$j]['maloaixe']."'><h3>".$products[$j]['tendongxe']."</h3></a>";
            echo "<p>Giá: ".$products[$j]['gia']."VND</p>";
            echo "</li>";
            if($i%4==0) echo "</div>";
            $i++;
        }
        ?>
    </ul>
</div>
<div id="phantrang" style="width:100%; ">
        <ul style="margin-left:40%; width:30%;">
            <?php
            $i=1;
            while($i<=ceil($tongsobanghi/$s_bghimoitrang))
            {?>
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 1px red; background-color: black; " href=
                "<?php $str=WEBROOT."index.php/Product/index/";
                       $str.=$maloaixe."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>
</div>