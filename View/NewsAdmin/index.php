
<h1>Danh Sách Tin Tức</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <thead>
            <a href="<?php echo WEBROOT.'index.php/NewsAdmin/add'?>" class="btn btn-primary btn-xs pull-right">Thêm Tin Tức</a>
        <tr>
        	<th>ID</th>
            <th>Mã Tin Tức</th>
            <th>Mã Loại Tin Tức</th>
            <th>Tên Tin Tức</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($newssadmin);
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
            echo "<td>" . $newssadmin[$j]['matintuc'] . "</td>";
            echo "<td>" . $newssadmin[$j]['maloaitintuc'] . "</td>";
            echo "<td>" . $newssadmin[$j]['tentintuc'] . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/NewsAdmin/edit/" . $newssadmin[$j]["matintuc"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a>
             <a href='".WEBROOT."index.php/NewsAdmin/delete/" . $newssadmin[$j]["matintuc"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
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
                "<?php $str=WEBROOT."index.php/NewsAdmin/index/";
                       $str.=$maloaitintuc."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>