<?php if(isset($_SESSION["user"]) == 2 ) {?>
    <h1>Danh sách ShowRoom</h1>
    <div >
    <table class="table table-bordered table-striped custab">
        <thead>
        <a href="<?php echo WEBROOT.'index.php/ShowroomAdmin/add/'?>" class="btn btn-primary btn-xs pull-right">Thêm Showroom mới</a>

        <tr>
            <th>Tên ShowRoom</th>
            <th>Địa Chỉ</th>
            <th>Hotline</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($Showrooms);
        $s_bghimoitrang=4;
        $start=0;
        $explode_url = explode('/',$_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
       
        {
            echo '<tr>';
            echo "<td>" . $Showrooms[$j]['tenshowroom'] . "</td>";
            echo "<td>" . $Showrooms[$j]['diachi'] . "</td>";
            echo "<td>" . $Showrooms[$j]['hotline'] . "</td>";

            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='".WEBROOT."index.php/ShowroomAdmin/edit/" . $Showrooms[$j]['id'] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='".WEBROOT."index.php/ShowroomAdmin/delete/" . $Showrooms[$j]['id'] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
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
            <li style="float: left; list-style-type: none;"><a style="display: block; padding: 10px; border: solid 1px orange; " href="<?php $str=WEBROOT."index.php/showroom/index/";
            $str.=$i;
                echo $str; ?>" ><?php echo $i;?></a></li>
        <?php
            $i++;
        }
        ?>
    </ul>
    </div>                 
<?php

}else{?>
    <div class="row">
    <div class="col-sm-5">
    <h1>Danh sách ShowRoom</h1>
    <div >
    <table class="table table-bordered table-striped custab">
        <thead>
        <tr>
            <th>Tên ShowRoom</th>
            <th>Địa Chỉ</th>
            <th>Hotline</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($Showrooms);
        $s_bghimoitrang=4;
        $start=0;
        $explode_url = explode('/',$_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
        $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
       
        {
            echo '<tr>';
            echo "<td>" . $Showrooms[$j]['tenshowroom'] . "</td>";
            echo "<td>" . $Showrooms[$j]['diachi'] . "</td>";
            echo "<td>" . $Showrooms[$j]['hotline'] . "</td>";
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
            <li style="float: left; list-style-type: none;"><a style="display: block; padding: 10px; border: solid 1px orange; " href="<?php $str=WEBROOT."index.php/showroom/index/";
            $str.=$i;
                echo $str; ?>" ><?php echo $i;?></a></li>
        <?php
            $i++;
        }
        ?>
    </ul>
    </div> 
    </div>
    <div class="col-sm-6">
    <H2>Bản đồ</H2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6385.839489800844!2d105.8003788370853!3d21.007320721663103!2m3!1f0!2f0!3f0!3m2!1i1020!2i768!4f13.1!3m3!1m2!1s0x3135aca174cdefa3%3A0x13d034e92518a794!2zVMOyYSBOaMOgIDM0VA!5e0!3m2!1svi!2s!4v1567938632057!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;padding-top: 20px;" allowfullscreen=""></iframe>
    </div>
    </div>

<?php

}?>


