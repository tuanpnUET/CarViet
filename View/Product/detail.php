<div class="row" id="Main" style="margin-top: 3%">
	<div id="left1" class="col-lg-5 col-12">
		<?php echo "<img src='".WEBROOT."image/".$products['anh']."' class='border' >" ?>
	</div>

	<div id="right1" class="col-lg-7 col-12">
		<div>
			<?php echo "<p>Tên xe: <b>".$products['tendongxe']."</b></p>" ?>
		</div>
		<div>
			<p>Loại xe: <?php echo "<b>".$products['maloaixe']."</b>"; ?> </p>
			<p>Mô tả: <?php echo "<b>".$products['mota']."</b>" ?></p>
			<p>Giá: <?php echo "<b id='gia'>".$products['gia']."</b>" ?>VND</p>
		</div>
		<div class="fa fa-shopping-cart" id="themvaogiohang">
			<b><a href="<?php echo WEBROOT."index.php/Cart/index/".$products["maxe"];?> ">Đặt hẹn ngay</a></b>
		</div>
	</div>	
</div>