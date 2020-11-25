
	<div>
		<div style="color:orange; font-size:30px; text-align: center;"> 
			Các mẫu xe bạn quan tâm
		</div>
	<table class="table table-bordered">
		<thead>
			
			<th> Ảnh </th>
			<th> Tên xe</th>
			<th> Giá</th>
			<th> Thao tác </th>

		</thead>
		<tbody>
			<?php 
			$i=0;
		if(isset($_SESSION["PRODUCTS"]))
			{
				// echo "<pre>";
				// print_r( $_SESSION["PRODUCTS"]);
		foreach ($_SESSION["PRODUCTS"] as $cart_itm){
				$i++;
			?>
			<tr>
				<td width="13%">
					<?php echo "<img src='".WEBROOT."image/".$cart_itm['anh']."' class='border' style='width:100%;height:15%;' >" ?></td>
				<td><?php echo $cart_itm["tendongxe"];?></td>
				<td class="gia"><p><?php echo $cart_itm["gia"];?> VND</p></td>
				<td><a href="<?php  echo WEBROOT."index.php/Cart/Delete/".$i; ?>">Xóa</a></td>	
			</tr>
			<?php
			}
		}
			  ?>
		</tbody>
	</table>
	
	<center><h3 style="margin-top: 2%"> Nhập Thông Tin Của Qúy Khách</h3></center>

			<div class="container ">
				<form class="form-horizontal col-lg-9 col-12 border" style="padding: 15px;" method="POST" action="<?php echo WEBROOT. 'index.php/Cart/Save';?>">
					  <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="HoTen" name="hoten">Họ Tên:</label>
					    <div class="col-lg-10 col-12">
					      <input type="HoTen" class="form-control" id="HoTen" name="hoten" onkeyup="check()"><div id="z-hoten"></div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="DienThoai">Số Điện Thoại:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="DienThoai" class="form-control" id="DienThoai" name="sdt"><div id="z-dienthoai" onkeyup="check()"></div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="SoChungMinhNhanDan">Số Chứng Minh Nhân dân:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="SoChungMinhNhanDan" class="form-control" id="SoChungMinhNhanDan" name="cmnd" onkeyup="check()"> <div id="z-diachi"></div>
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="Email">Email:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="Email" class="form-control" id="Email" name="email"><div id="z-email" onkeyup="check()"></div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="NgayHen">Ngày Hẹn:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="NgayHen" class="form-control" id="NgayHen" name="ngayhen"  onkeyup="check()"> <div id="z-ngayhen"></div>
					    </div>
					  <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="DiaChi">Địa Chỉ:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="DiaChiEmail" class="form-control" id="DiaChi" name="diachi"   onkeyup="check()"> <div id="z-diachi"></div>
					    </div>
					   <div class="form-group">
					    <label class="control-label col-lg-2 col-12" for="GhiChu">Ghi Chú:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="GhiChu" class="form-control" style="height: 100px;" id="GhiChu" name="ghichu">
					    </div>
					  </div>
					  <button type="submit" class="btn btn-default" style="background-color: green; color: white">Đặt lịch</button>
				</form>
			</div>	
	</div>
	<script type="<?php echo".WEBROOT." ?>"></script>