<div class="row w-100" id="Main" style="padding: 2% 5%">
	<div class="col-12 col-lg-12"  id="Khungthongtin" >
		<div class="col-12 col-lg-12" style="padding: 1%">
			<b>Thông Tin Khách Hàng</b>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Tên Khách Hàng :</b>
				<?php echo "".$Oders[0]['nguoidathang']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Số Điện Thoại :</b>
				<?php echo "".$Oders[0]['sdt']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Địa Chỉ :</b>
				<?php echo "".$Oders[0]['diachi']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Trạng Thái Đơn Hàng :</b>
				<?php echo "".$Oders[0]['trangthai']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Ghi Chú :</b>
				<?php echo "".$Oders[0]['ghichu']."" ?>
			</div>
			<div class="col-lg-12 col-12" style="margin:1%">
				<b>Ngày Đặt Hàng :</b>
				<?php echo "".$Oders[0]['ngaychonhang']."" ?>
			</div>
		</div>
	</div>
	<?php  if($Oders[0]['trangthai'] != "Hoàn Thành" ): ?>
		<?php  if($Oders[0]['trangthai'] != "Đã Hủy Đơn" ): ?>
	<div class="col-12 col-lg-12"  id="KhungChuanBi" style="margin-top: 1%" >

		<div style="padding: 2% 5%" class="col-12 col-lg-12">	
			<?php 
	
				echo "<i class='fa fa-angle-double-right col-lg-9 col-8' style='color:#5b5959;'><i class='fa fa-angle-double-right'></i><i class='fa fa-angle-double-right'></i><i class='fa fa-angle-double-right'></i> Tiếp Theo Bạn Có Thể</i>";
		  if("" .$Oders[0]['trangthai'] ."" == 'Chờ Xác Nhận'){ 
	            echo "        
	        
	            <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $Oders[0]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        } elseif("" .$Oders[0]['trangthai'] ."" =='Chờ Lấy Hàng'){
	              echo "  	          
	           a>
	             <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $Oders[0]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        } elseif("" .$Oders[0]['trangthai'] ."" =='Đã Nhận Hàng'){
	              echo " 	             
	        
	             <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $Oders[0]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
	        }
	        elseif("" .$Oders[0]['trangthai'] ."" =='Đang Giao Hàng'){
	              echo "  	            
	          
	             <a href='".WEBROOT."index.php/CartAdmin/huy1/" . $Oders[0]["sohoadon"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Cancel</a>";
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
        $i=1;
        $tongtien=0;
        $tt=0;
        foreach ($Oders as $cart_itm)
        {
            echo '<tr>';    
            echo "<td>".$i."</td>";
            echo "<td>" .$cart_itm['tensanpham']."</td>";
            echo "<td>" . $cart_itm['soluong'] . "</td>";
            echo "<td>" . $cart_itm['gia'] . "</td>";
            $tt=(int)$cart_itm['soluong']*(int)$cart_itm['gia'];
            echo "<td>" . $tt . "</td>";
            echo "</tr>";
            $i++;
            $tongtien=$tongtien+$tt;
        }
        
        ?>
      
    </table>
    <h3>Tổng tiền: <?php echo $tongtien; ?></h3>
</div>
</div>
</div>
</div>
