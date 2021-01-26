
<h1>Danh Sách Loại Tin Tức</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <thead>
            <a href="<?php echo WEBROOT.'index.php/ListNew/add'?>" class="btn btn-primary btn-xs pull-right">Thêm Loại Tin Tức</a>
        <tr>
            <th>ID</th>
            <th>Mã Loại Tin Tức</th>
            <th>Tên Loại Tin Tức</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($listnews);
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
            echo "<td>".$i."</td>";
            echo "<td>" . $listnews[$j]['maloaitintuc'] . "</td>";
            echo "<td>" . $listnews[$j]['tenloaitintuc'] . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/ListNew/edit/" . $listnews[$j]["maloaitintuc"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a>
             <a href='".WEBROOT."index.php/ListNew/delete/" . $listnews[$j]["maloaitintuc"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
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
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 2px red; background-color: black; " href=
                "<?php $str=WEBROOT."index.php/ListNew/index/";
                       $str.=$maloaitintuc."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>