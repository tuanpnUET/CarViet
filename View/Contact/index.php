<center><h3 style="margin-top: 2%">Hãy Gửi Câu Hỏi Của Bạn Cho Chúng Tôi</h3></center>
		<div class="container ">
			<form class="form-horizontal col-lg-10 col-12 " style="padding: 15px;margin: auto;" method="POST" action="<?php WEBROOT.'index.php/Contact/index' ?>">
				<div class="row">
				 <div class="col-lg-6 col-6">
				 	 <div class="form-group">
				    <div class="col-lg-12 col-12">
				      <input type="HoTen" class="form-control" id="hoten" placeholder="Họ Tên" name="hoten" onkeyup="hoidap()"><div id="z-hoten"></div>
				    </div>
					</div>
				  <div class="form-group">
				    <div class="col-lg-12 col-12"> 
				      <input type="DienThoai" class="form-control" id="dienThoai" placeholder="Điện Thoại" name="sdt" onkeyup="hoidap()"><div id="z-sdt"></div>
				    </div>
				  </div>
				   <div class="form-group">
				    <div class="col-lg-12 col-12"> 
				      <input type="DiaChiEmail" class="form-control" id="email" placeholder="Email" name="email" onkeyup="hoidap()"><div id="z-email"></div>
				    </div>
				  </div>
				   <div class="form-group">
				    <div class="col-lg-12 col-12"> 
				       <input placeholder="Địa Chỉ" class="form-control" id="diachi"><div id="diachi" onkeyup="hoidap()"></div>
				    </div>
				  </div>
				  </div>
				  <div class="col-lg-6 col-6">
				   <div class="form-group" >
				    <div class="col-lg-12 col-12"> 
				  <textarea type="noidung" class="form-control" id="noidung" placeholder="Ý kiến của bạn" name="noidung" style="height: 200px" onkeyup="hoidap()"></textarea><div id="noidung"></div>
				    </div>
				    </div>
				  </div>		  
				  	</div>
				  		<center><button type="submit" name="" value="Gửi câu hỏi" id="nutdathang">Gửi câu hỏi</button></center>
			</form>

		</div>