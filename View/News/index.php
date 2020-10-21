    <div id="tintuc" class="col-12 col-xs-12 col-lg-12 ">
		<?php
		$tongsobanghi=count($newss);
        $s_bghimoitrang=3;
        $start=0;
        $maloaitintuc="ALL";
        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
            $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
            $maloaitintuc=$explode_url[count($explode_url)-2];
        $i=1;
for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {

            echo "<div id='anhtintuc' class='col-lg-4 col-12'>";
            echo "<a href='".WEBROOT."index.php/News/detail/".$newss[$j]['matintuc']."'><img src='".WEBROOT."Image/".$newss[$j]['anh']."' style='margin-top:8%' ></a>";
            echo "</div>";
            echo "<div id='thongtintt' class='col-lg-8 col-12' style='margin-top:2%'>";
            echo "<a href='".WEBROOT."index.php/News/detail/".$newss[$j]['matintuc']."'><h3>".$newss[$j]['tentintuc']."</h3></a>";
            $str=$newss[$j]['noidungtin'];
            $str=strip_tags($str);
            $strCut=mb_substr($str, 0,250);
            echo $strCut."...";
            echo "<br><a href='".WEBROOT."index.php/News/detail/".$newss[$j]['matintuc']."'>Read More </a>";
            echo "</div>";
            $i++;
        }
        
		?>

	</div>

	<div id="phantrang" class="col-12 col-xs-12 col-lg-12">
		<ul style="margin-left:40%; width:30%;">
            <?php
            $i=1;
            while($i<=ceil($tongsobanghi/$s_bghimoitrang))
            {?>
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 1px orange; " href=
                    "<?php $str=WEBROOT."index.php/News/index/";
                       $str.=$maloaitintuc."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
</div>