
	<div>
		<div style="color:orange; font-size:30px; text-align: center;"> 
			Giỏ hàng của bạn
		</div>
	<table class="table table-bordered">
		<thead>
			
			<th> Ảnh </th>
			<th> Tên hàng</th>
			<th> Giá hàng</th>
			<th> Số lượng</th>
			<th> Thành tiền</th>
			<th> Thao tác </th>

		</thead>
		<tbody>
			<?php 
			$i=0;
		if(isset($_SESSION["PRODUCTS"]))
			{
				echo "<pre>";
				print_r( $_SESSION["PRODUCTS"]);
		foreach ($_SESSION["PRODUCTS"] as $cart_itm)

	    	{

				$i++;
			?>
			<tr>
				
				<td width="13%">
					<?php echo "<img src='".WEBROOT."Image/".$cart_itm['anh']."' class='border' style='width:100%;height:15%;' >" ?>

				</td>
				<td>
					<?php 
					echo $cart_itm["tensanpham"];?>
				</td>
				<td class="gia">
					<?php echo $cart_itm["gia"];?>
				</td>
				<td>
					<select name="soluong" class="soluong">
						<script>
							for(i=1;i<100;i++)
							{
								document.write("<option value='"+i+"'>"+i+"</option>");
							}
						</script>
					</select>
				</td>
				<td>
					<input  value="<?php echo $cart_itm['gia'];?>" class="thanhtien" name="thanhtien" readonly="true">
					<script>
						
						$(document).ready(function()
						{				

							$(".soluong").click(function(){
								//https://stackoverflow.com/questions/203198/event-binding-on-dynamically-created-elements
								var sl=parseInt($(this).val());
								//alert(sl);
								var gia=parseInt($(this).parents("tr").find(".gia").text());
								//alert(gia);
								// $(this).parents("tr").find(".thanhtien").val(sl*gia);
									
								// var tt=0;
								// for(i=0;i<$(".thanhtien").length;i++)
								// {
								// 	tt=tt+parseInt($(".thanhtien")[0].value);
								// }
								// $("#tongtien").val(tt);

							});

						})
					</script>
				</td>
				<td>
					
					<a href="<?php  echo WEBROOT."index.php/Cart/Delete/".$i; ?>">Xóa</a>
				
				</td>
				
			</tr>
			<?php
			}//while
		}
			  ?>
		</tbody>
	</table>
	<!-- <h3>Tổng tiền: <input type="text" id="tongtien"> </h3> -->
	
	<center><h3 style="margin-top: 2%"> Nhập Thông Tin Giao Hàng Của Qúy Khách</h3></center>

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
					    <label class="control-label col-lg-4 col-12" for="DiaChiEmail">Địa Chỉ:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="DiaChiEmail" class="form-control" id="DiaChi" name="diachi"  style="height: 100px;" onkeyup="check()"> <div id="z-diachi"></div>
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="control-label col-lg-4 col-12" for="Email">Email:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="Email" class="form-control" id="Email" name="email"><div id="z-email" onkeyup="check()"></div>
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="control-label col-lg-2 col-12" for="GhiChu">Ghi Chú:</label>
					    <div class="col-lg-10 col-12"> 
					      <input type="GhiChu" class="form-control" id="GhiChu" name="ghichu">
					    </div>
					  </div>
					  <button type="submit" class="btn btn-default" style="background-color: green">Đặt hàng</button>	
					 <div class="row col-12 col-lg-12 border" style="margin: 2%;">
				<div class="col-12 col-lg-12" id="httt" >
					<center><b>Chọn Hình  Thức Thanh Toán</b></center>
				</div>
				<div id="chuyenkhoan" class="col-lg-12 col-12 row">
					<div class="col-lg-4 col-4">
						<?php echo "<img  src='".WEBROOT."image/thanhtoan.png' class='mx-auto d-block'><br> "?>
						<input class="mx-auto d-block" type="radio" name="thanhtoan" checked>
					</div>
					<div class="col-lg-4 col-4">
						<?php echo "<img  src='".WEBROOT."image/chuyenkhoan.png' class='mx-auto d-block'><br> "?>
						<input class="mx-auto d-block" type="radio" name="thanhtoan" >
					</div>
					
					<div class="col-lg-4 col-4">
						<?php echo "<img  src='".WEBROOT."image/momo.png' class='mx-auto d-block'><br> "?>
						<input class="mx-auto d-block" type="radio" name="thanhtoan" >
					</div>
				</div>
			</div>

				</form>
			</div>	
	</div>
	<script type="<?php echo".WEBROOT." ?>"></script>