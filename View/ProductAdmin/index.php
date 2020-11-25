<h1>Danh Sách Xe</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <thead>
            <a href="<?php echo WEBROOT.'index.php/ProductAdmin/add'?>" class="btn btn-primary btn-xs pull-right">Thêm Xe mới</a>
        <tr>
            <th>STT</th>
            <th>Mã Xe</th>
            <th>Mã Loại Xe</th>
            <th>Tên dòng xe</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($productsadmin);
        $s_bghimoitrang=3;
        $start=0;
                $mamaloaixe="ALL";

        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {
            echo '<tr>';    
            echo "<td>".$i."</td>";
            echo "<td>" . $productsadmin[$j]['maxe'] . "</td>";
            echo "<td>" . $productsadmin[$j]['maloaixe'] . "</td>";
            echo "<td>" . $productsadmin[$j]['tendongxe'] . "</td>";
            echo "<td>" . $productsadmin[$j]['gia'] . "</td>";
            echo "<td>" . $productsadmin[$j]['anh'] . "</td>";
            echo "<td>" . $productsadmin[$j]['mota'] . "</td>";

            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/ProductAdmin/edit/" . $productsadmin[$j]["maxe"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a>
             <a href='".WEBROOT."index.php/ProductAdmin/delete/" . $productsadmin[$j]["maxe"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
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
                "<?php $str=WEBROOT."index.php/ProductAdmin/index/";
                       $str.=$mamaloaixe."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>