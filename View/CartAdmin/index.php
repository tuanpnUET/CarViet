
<h1>Danh Sách Đơn Hẹn</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <tr>
            <th>Mã Đơn</th>
            <th>Người Đặt Hẹn</th>
            <th>SĐT</th>
            <th>CMND</th>
            <th>Địa Chỉ</th>
            <th>Ngày Hẹn</th>
            <th>Tên Dòng Xe</th>
            <th>Giá</th>
            <th>Trạng Thái</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($cartsadmin);
        $s_bghimoitrang=3;
        $start=0;
        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {   
            echo '<tr>';    
            echo "<td style = 'width:1%'>" . $cartsadmin[$j]['madon'] . "</td>";
            echo "<td >" . $cartsadmin[$j]['hoten'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['sdt'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['cmnd'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['diachi'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['ngayhen'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['tendongxe'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['gia'] . "</td>";
            echo "<td>" . $cartsadmin[$j]['trangthai'] . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/edit/" . $cartsadmin[$j]["madon"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a>
             <a href='".WEBROOT."index.php/CartAdmin/delete/" . $cartsadmin[$j]["madon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
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