
<h1>Danh sách loại sản phẩm</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <thead>
        <a href="<?php echo WEBROOT.'index.php/Category/add' ?>" class="btn btn-primary btn-xs pull-right">Thêm loại sản phẩm</a>
        <tr>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($Categories);
        $s_bghimoitrang=4;
        $start=0;
        $explode_url = explode('/',$_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
       
        {
            echo '<tr>';
            echo "<td>" . $Categories[$j]['maloai'] . "</td>";
            echo "<td>" . $Categories[$j]['tenloai'] . "</td>";
         
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='".WEBROOT."index.php/category/edit/" . $Categories[$j]['maloai'] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='".WEBROOT."index.php/category/delete/" . $Categories[$j]['maloai'] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</div>
<div id="phantrang" style="width: 100%;">
    <ul style="margin-left: 40%; width:30%; ">
        <?php
        $i=1;
        while($i<=ceil($tongsobanghi/$s_bghimoitrang))
        {?>
            <li style="float: left; list-style-type: none;"><a style="display: block; padding: 10px; border: solid 1px orange; " href="<?php $str=WEBROOT."index.php/category/index/";
            $str.=$i;
                echo $str; ?>" ><?php echo $i;?></a></li>
        <?php
            $i++;
        }
        ?>
    </ul>
</div>