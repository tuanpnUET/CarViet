<h1>Danh sách Câu Hỏi</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <thead>
        <tr>
            <th>id</th>
            <th>Họ Tên</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Nội Dung</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($ContactAdmins);
        $s_bghimoitrang=3;
        $start=0;
        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {
            echo '<tr>';   
            echo "<td>" . $ContactAdmins[$j]['id'] . "</td>";
            echo "<td>" . $ContactAdmins[$j]['hoten'] . "</td>";
            echo "<td>" . $ContactAdmins[$j]['sdt'] . "</td>";
            echo "<td>" . $ContactAdmins[$j]['email'] . "</td>";
            echo "<td>" . $ContactAdmins[$j]['diachi'] . "</td>";
            echo "<td>" . $ContactAdmins[$j]['noidung'] . "</td>";
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
                "<?php $str=WEBROOT."index.php/ContactAdmin/index/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>