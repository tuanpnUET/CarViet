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
			<b><a href="<?php echo WEBROOT."index.php/Cart/index/".$products["maxe"];?> ">Thêm vào showroom của bạn</a></b>
		</div>
	</div>	
	<div id="right2" class="col-lg-12 col-12 border">
			<h2>Các mẫu xe tương tự</h2>
			<ul class="col-lg-12 col-12" id="sptt" >
				<?php 
				$j=0;
				foreach ($products1 as $sp) {
				echo "<li class='col-lg-4 col-4'>";
				echo "<center><a href='".WEBROOT."index.php/product/detail/".$products1[$j]['maxe']."/".$products1[$j]['maloaixe']."'><img src='".WEBROOT."image/".$products1[$j]['anh']."' style='width:50%;height:137px;' ></a></center>";
				 echo "<center><a href='".WEBROOT."index.php/product/detail/".$products1[$j]['maxe']."/".$products1[$j]['maloaixe']."'><h3>".$products1[$j]['tendongxe']."</h3></a>";
				echo "</li>";
				$j++;
			}
				?>
			</ul>
	</div>
	
</div>