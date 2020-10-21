<div class="row w-100" id="Main" style="padding: 2% 5%">
	<div class="col-12 col-lg-12"  id="Khungthongtin" >
		<div class="col-12 col-lg-12" style="padding: 1%">
			<b>Thông Tin Khách Hàng</b>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Tên Khách Hàng :</b>
				<?php echo "".$cartsadmin['nguoidathang']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Số Điện Thoại :</b>
				<?php echo "".$cartsadmin['sdt']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Địa Chỉ :</b>
				<?php echo "".$cartsadmin['diachi']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Trạng Thái Đơn Hàng :</b>
				<?php echo "".$cartsadmin['trangthai']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Ghi Chú :</b>
				<?php echo "".$cartsadmin['ghichu']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Ngày Tạo Đơn :</b>
				<?php echo "".$cartsadmin['ngaychonhang']."" ?>
			</div>
		</div>
	</div>
	<?php  if($cartsadmin['trangthai'] != "Hoàn Thành" ): ?>
		<?php  if($cartsadmin['trangthai'] != "Đã Hủy Đơn" ): ?>
	<div class="col-12 col-lg-12"  id="KhungChuanBi" style="margin-top: 1%" >

		<div style="padding: 2% 5%" class="col-12 col-lg-12">	
			<?php 
	
				echo "<i class='fa fa-angle-double-right col-lg-9 col-8' style='color:#5b5959;'><i class='fa fa-angle-double-right'></i><i class='fa fa-angle-double-right'></i><i class='fa fa-angle-double-right'></i> Tiếp Theo Bạn Có Thể</i>";
		  if("" .$cartsadmin['trangthai'] ."" == 'Chờ Xác Nhận'){ 
	            echo "        
	            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/duyetdon/" . $cartsadmin["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Duyệt Đơn</a>
	            <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $cartsadmin["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        } elseif("" .$cartsadmin['trangthai'] ."" =='Chờ Lấy Hàng'){
	              echo "  	          
	            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/chuanbihang1/" . $cartsadmin["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Chuẩn Bị Hàng</a>
	             <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $cartsadmin["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        } elseif("" .$cartsadmin['trangthai'] ."" =='Đã Nhận Hàng'){
	              echo " 	             
	            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/giaohang1/" . $cartsadmin["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Giao Hàng</a>
	             <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $cartsadmin["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        }
	        elseif("" .$cartsadmin['trangthai'] ."" =='Đang Giao Hàng'){
	              echo "  	            
	            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/CartAdmin/hoanthanh1/" . $cartsadmin["sohoadon"] . "' ><span class='glyphicon glyphicon-edit'></span> Hoàn Thành</a>
	             <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $cartsadmin["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        }
	        
       ?>
		</div>
	</div>			
			<?php endif; ?>
		<?php endif; ?>

	<div class="col-12 col-lg-12"  id="KhungSanPham" style="margin-top: 1%" >
		<div style="padding: 2% 5%" class="col-12 col-lg-12">	
			<b>Thông Tin Sản Phẩm</b>
				<div>
    <table class="table table-bordered table-striped custab">
        <tr>
            <th>STT</th>
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Thành Tiền</th>
        </tr>
        </thead>
        <?php
        $start=0;
        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
       
        $i=1;
            echo '<tr>';    
            echo "<td>".$i."";
            echo "<td style='width :30%'>";
	      	echo "<img src='".WEBROOT."Image/".$cartsadmin['anh']."'style='width:20%';>";
	      	echo  "Helo".$_SESSION["user"]."" ;
			echo "";    
            echo "<td>" . $cartsadmin['soluong'] . "";
	        echo "<td>" . $cartsadmin['gia'] . "";
	       	echo "<td>" . $cartsadmin['gia'].  "";
	    	
            echo "</tr>";
            $i++;
     
        ?>
    </table>
</div>
</div>
</div>
</div>
