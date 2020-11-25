	
			<div class="row" id="sanphammoi" class="col-lg-12 col-12">
				<div class="col-6 col-lg-10" id="tieude1">
					<p><b>Các dòng xe hot nhất hiện nay</b></p>
				</div>
				<div class="col-6 col-lg-2" id="xemthem">
					<a href="<?php echo WEBROOT."index.php/Product/index/ALL/1";?>"><p><b>>>Xem Thêm</b></p></a>
				</div>
				<?php $start=0; ?>
				<div id="sanphammoi3" class="col-lg-12 col-12">
					<ul class="col-12 col-lg-12">
							<?php
								for ($j=$start;$j<3;$j++){
								echo "<li class='col-lg-4 col-6'>";
								echo "<a href='".WEBROOT."index.php/product/detail/".$trangchus[$j]['maxe']."/".$trangchus[$j]['maloaixe']."'><img src='".WEBROOT."image/".$trangchus[$j]['anh']."' alt=''></a>";
								echo "<br>";
								echo "<a href='".WEBROOT."index.php/product/detail/".$trangchus[$j]['maxe']."/".$trangchus[$j]['maloaixe']."'><h3>".$trangchus[$j]['tendongxe']."</h3></a>";
								echo "<p>Giá: ".$trangchus[$j]['gia']." VND</p>";
								echo "</li>";
							}
							?>
					</ul>
				</div>
				<div class="col-6 col-lg-10" id="tieude1">
					<p><b>Tin Tức</b></p>
				</div>
				<div class="col-6 col-lg-2" id="xemthem">
					<a href="<?php echo WEBROOT."index.php/News/index/ALL/1";?>"><p><b>>>Xem Thêm</b></p></a>
				</div>
				<?php $start=0;?>
				<div id="sanphammoi3" class="col-lg-12 col-12">
					<ul class="col-12 col-lg-12">
							<?php
								for ($j=$start;$j<3;$j++){
								echo "<li class='col-lg-4 col-6'>";
								echo "<a href='".WEBROOT."index.php/News/detail/".$trangchus1[$j]['matintuc']."'><img src='".WEBROOT."Image/".$trangchus1[$j]['anh']."' alt=''></a>";
								echo "<br>";
								echo "<a href='".WEBROOT."index.php/News/detail/".$trangchus1[$j]['matintuc']."'><h3>".$trangchus1[$j]['tentintuc']."</h3></a>";
								
								echo "</li>";
							}
							?>
					</ul>
				</div>
				
			</div>	


		

