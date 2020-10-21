<div class="row" id="Main" style="margin-top: 3%">
	<div id="left1" class="col-lg-5 col-12">
		<?php echo "<img src='".WEBROOT."Image/".$products['anh']."' class='border' >" ?>
	</div>

	<div id="right1" class="col-lg-7 col-12">
		<div>
			<?php echo "<b>".$products['tensanpham']."</b>" ?>
		</div>

		<div>
			<p>• Loại sản phẩm: <?php echo "<b>".$products['loaisanpham']."</b>"; ?> </p>
			<p>• Dạng bào chế: <?php echo"<b>".$products['dangbaoche']."</b>" ?> </p>
			<p>• Quy cách sản phẩm: <?php echo "<b>".$products['quycachsanpham']."</b>"; ?> </p>
			<p>• Hàm lượng: <?php echo "<b>".$products['hamluong']."</b>" ?></p>
			<?php echo "<b id='gia'>".$products['gia']."</b>" ?>
		</div>

		<div class="fa fa-shopping-cart" id="themvaogiohang">
			<b><a href="<?php echo WEBROOT."index.php/Cart/index/".$products["masanpham"];?> ">Thêm vào giỏ hàng</a></b>
		</div>
		
	</div>	


	<div class="row " id="Main" style="margin-top: 3%">
		<div id="left2" class="col-lg-12 col-12">
			<b id="tenchitiet">Thành phần: </b>
				<?php echo "<p>".$products['thanhphan']."</p>"; ?>
			<b id="tenchitiet">Công dụng: </b>
				<?php echo "<p>".$products['congdung']."</p>"; ?>
			<b id="tenchitiet">Đối tượng sử dụng: </b>
				<?php echo "<p>".$products['doituong']."</p>"; ?>
			<b id="tenchitiet">Cách dùng (Hướng dẫn sử dụng): </b>
				<?php echo "<p>".$products['cachdung']."</p>"; ?>
			<b id="tenchitiet">Lưu ý: </b>
				<?php echo "<p>".$products['luuy']."</p>"; ?>
			<b id="tenchitiet">Bảo quản: </b>
				<?php echo "<p>".$products['baoquan']."</p>"; ?>
			<b id="tenchitiet">Hạn sử dụng :</b>
				<?php echo "<p>".$products['hansudung']."</p>"; ?>
		</div>
	</div>
	<div id="right2" class="col-lg-12 col-12 border">
			<h2>Sản Phẩm Tương Tự</h2>
			<ul class="col-lg-12 col-12" id="sptt" >
				<?php 
				$j=0;
				foreach ($products1 as $sp) {
				echo "<li class='col-lg-4 col-4'>";
				echo "<center><a href='".WEBROOT."index.php/product/detail/".$products1[$j]['masanpham']."/".$products1[$j]['maloai']."'><img src='".WEBROOT."Image/".$products1[$j]['anh']."' style='width:50%;height:137px;' ></a></center>";
				 echo "<center><a href='".WEBROOT."index.php/product/detail/".$products1[$j]['masanpham']."/".$products1[$j]['maloai']."'><h3>".$products1[$j]['tensanpham']."</h3></a>";
				echo "</li>";
				$j++;
			}
				?>
			</ul>
	</div>
	
</div>