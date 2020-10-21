
<h1>Danh Sách Đơn Hàng</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <tr>
            <th>Số Hóa Đơn</th>
            <th>Người Đặt Hàng</th>
            <th>SĐT</th>
            <th>Địa Chỉ</th>
            <th>Tổng Tiền</th>
            <th>Trạng Thái</th>
            <th class="text-center">Action</th>
            
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($cartsadmin);
        $s_bghimoitrang=3;
        $start=0;
        $maloaitintuc="ALL";

        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {   
            echo '<tr>';    
            echo "<td style = 'width:1%'>" . $cartsadmin[$j]['sohoadon'] . "</td>";
            echo "<td >" . $cartsadmin[$j]['nguoidathang'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['sdt'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['diachi'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['gia'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['trangthai'] . "</td>";
           if("" .$cartsadmin[$j]['trangthai'] ."" == 'Chờ Xác Nhận'){ 
            echo "<td class='text-center'>  
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/detail/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/duyetdon/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Duyệt Đơn</a>
            <a href='".WEBROOT."index.php/CartAdmin/huy/" . $cartsadmin[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        } elseif("" .$cartsadmin[$j]['trangthai'] ."" =='Chờ Lấy Hàng'){
              echo "<td class='text-center'>  
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/detail/" . $cartsadmin[$j]['sohoadon'] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/chuanbihang/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chuẩn Bị Hàng</a>
             <a href='".WEBROOT."index.php/CartAdmin/huy/" . $cartsadmin[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        } elseif("" .$cartsadmin[$j]['trangthai'] ."" =='Đã Nhận Hàng'){
              echo "<td class='text-center'> 
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/detail/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/giaohang/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Giao Hàng</a>
             <a href='".WEBROOT."index.php/CartAdmin/huy/" . $cartsadmin[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        }
        elseif("" .$cartsadmin[$j]['trangthai'] ."" =='Đang Giao Hàng'){
              echo "<td class='text-center'>  
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/detail/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/hoanthanh/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Hoàn Thành</a>
             <a href='".WEBROOT."index.php/CartAdmin/huy/" . $cartsadmin[$j]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a></td>";
        }
        elseif("" .$cartsadmin[$j]['trangthai'] ."" =='Hoàn Thành'){
              echo "<td class='text-center'>
                        <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/detail/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a></td>";
        }
        elseif("" .$cartsadmin[$j]['trangthai'] ."" =='Đã Hủy Đơn'){
              echo "<td class='text-center'> 
                        <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/detail/" . $cartsadmin[$j]["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi Tiết</a></td>";
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
                "<?php $str=WEBROOT."index.php/CartAdmin/index/";
                       $str.=$maloaitintuc."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>