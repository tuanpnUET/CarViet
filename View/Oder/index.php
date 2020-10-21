
<h1>Danh Sách Đơn Hàng</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <tr>
            <th>STT</th>
            <th>Người Đặt Hàng</th>
            <th>Ngày Tạo Hàng</th>
            <th>Tổng Tiền</th>
            <th class="text-center">Action</th>
            
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($Oders);
        $s_bghimoitrang=3;
        $start=0;
        $sohoadon="ALL";

        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {   
            echo '<tr>';    
            echo "<td style = 'width:1%'>" . $i  . "</td>";
            echo "<td >" . $Oders[$j]['nguoidathang'] . "</td>";
            echo "<td> " . $Oders[$j]['ngaydathang'] . "</td>";
            echo "<td>" . $Oders[$j]['gia'] . "</td>";
           if("" .$Oders[$j]['trangthai'] ."" == 'Chờ Xác Nhận'){ 
            echo "<td class='text-center'>  
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/Oder/detail/" . $Oders[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
            <a href='".WEBROOT."index.php/Oder/huy/" . $Oders[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        } elseif("" .$Oders[$j]['trangthai'] ."" =='Chờ Lấy Hàng'){
              echo "<td class='text-center'>  
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/Oder/detail/" . $Oders[$j]['sohoadon'] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
           
             <a href='".WEBROOT."index.php/Oder/huy/" . $Oders[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        } elseif("" .$Oders[$j]['trangthai'] ."" =='Đã Nhận Hàng'){
              echo "<td class='text-center'> 
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/Oder/detail/" . $Oders[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>

             <a href='".WEBROOT."index.php/Oder/huy/" . $Oders[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        }
        elseif("" .$Oders[$j]['trangthai'] ."" =='Đang Giao Hàng'){
              echo "<td class='text-center'>  
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/Oder/detail/" . $Oders[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
             <a href='".WEBROOT."index.php/Oder/huy/" . $Oders[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        }
        elseif("" .$Oders[$j]['trangthai'] ."" =='Hoàn Thành'){
              echo "<td class='text-center'>
                        <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/Oder/detail/" . $Oders[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a></td>";
        }
        elseif("" .$Oders[$j]['trangthai'] ."" =='Đã Hủy Đơn'){
              echo "<td class='text-center'> 
                        <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/Oder/detail/" . $Oders[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a></td>";
        }
            
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</div>
    <div id="phantrang" style="width:100%;">
        <ul style="margin-left:40%; width:30%;">
            <?php
            $i=1;
            while($i<=ceil($tongsobanghi/$s_bghimoitrang))
            {?>
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 1px orange; " href=
                "<?php $str=WEBROOT."index.php/Oder/index/";
                       $str.=$sohoadon."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>