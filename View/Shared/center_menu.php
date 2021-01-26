	<div class="row" id="center" class="col-lg-12 col-12" style="width: 100%">
	 		 <div id="mycarousel" class="carousel slide col-lg-9 col-12 " data-ride="carousel">

		        <!--Cho hiện thị chỉ số nếu muốn-->
		        <ol class="carousel-indicators">
		            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
		            <li data-target="#mycarousel" data-slide-to="1" class=""></li>
		            <li data-target="#mycarousel" data-slide-to="2" class=""></li>
		        </ol>
		        <!--Hết tạo chỉ số-->

		        <!--Các slide bên trong carousel-inner-->
		        <div class="carousel-inner" >

		            <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
		            <div class="carousel-item active">
		                <?php echo "<img class='d-block w-100' src='".WEBROOT."image/slide1.jpg'>";?>
		                <!--Cho thêm hiện thị thông tin-->
		            
		            </div>

		            <!--Slide 2-->
		            <div class="carousel-item">
		                <?php echo "<img class='d-block w-100' src='".WEBROOT."image/slide2.jpg'>";?>
		            </div>
		            <!--Slide 3-->
		            <div class="carousel-item">
		                <?php echo "<img class='d-block w-100' src='".WEBROOT."image/slide3.jpg'>";?>
		            </div>
		        </div>
		        


		        <!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
		            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
		            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
		        <!--Hết tạo điều khiển chuyển Slide--> 
		        
		  	</div>
		  		  <div class="col-lg-3 col-12 " id="khung1" >
		  		  	<?php      if(!isset($_SESSION["user"])) { ?>
				  	
				  		<center><a  href="<?php echo WEBROOT.'index.php/Cart/index/';?>"><p class='center-block' style='background-color: black;color: white;border-color: red;padding:5px 5px'><i class='fa fa-shopping-cart'></i>LỊCH HẸN</p></a></center>
				  	 <?php }    else{ ?>
					<center ><a href="<?php echo WEBROOT.'index.php/User/doimatkhau/';?>"><input type="button" name="dmk" class="btn btn-default" style="margin-top: 15px; background-color: black; color: red;border-color: red;" value="Đổi mật khẩu"></a></center>
				  	 	 <?php }?>
				  	<center><p style="margin-top:15px;" class="hotline"><span></span><b class="chu1">Tư vấn miễn phí</b><br><b class="chu1">0928230347</b></p></center>
				  	<center><p class="hotline"><span><img src=""></span><b class="chu1">Tư vấn miễn phí</b><br><b class="chu1">0928230347</b></p></center>
				  </div>
			</div>