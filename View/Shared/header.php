
<div class="content">
			<!-- Header -->
		<div class="row" id="header">
			<div id="logo" class="col-12 col-lg-8">
				<a href="<?php echo WEBROOT."index.php/Home/index";?>"><?php echo "<img src='".WEBROOT."image/logo.jpg' alt='logo'>";?></a>
			</div>
			
			<?php      if(!isset($_SESSION["user"])) { ?>
          <div id="cart" class=" col-6 col-lg-2 ">
				<a  href="<?php echo WEBROOT.'index.php/User/reg/' ?>"><p class="center-block">ĐĂNG KÝ</p></a>
			</div>
			<div id="dangxuat" class=" col-6 col-lg-2">
				<a href="<?php echo WEBROOT.'index.php/User/login/'?>"><p class="center-block">ĐĂNG NHẬP</p></a>
			</div>
      <?php }
      else{
      ?>
          <div id="cart" class=" col-6 col-lg-2 ">
			<a  href="<?php echo WEBROOT.'index.php/Cart/index/';?>"><p class="center-block"><i class="fa fa-shopping-cart"></i>GIỎ HÀNG</p></a>
		</div>
			<div id="dangxuat" class=" col-6 col-lg-2">
				<a href="<?php echo WEBROOT.'index.php/User/logout/' ?>"><p class="center-block">ĐĂNG XUẤT</p></a>
			</div>
          
        <?php }?>
		</div>
				<!-- Menu + Seach -->
	 <nav class="navbar navbar-expand-lg navbar-light ">
	    <a class="navbar-brand" href="<?php echo WEBROOT."index.php/Home/index";?>" >Trang Chủ</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav mr-auto">
		        <li class="nav-item">
		          <a href="<?php echo WEBROOT."index.php/Product/index/ALL/1";?>" class=" nav-link" >Mẫu Xe<span class="sr-only">(current)</span></a>
		        </li>
		   
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo WEBROOT."index.php/News/index/ALL/1";?>">Tin Tức</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo WEBROOT."index.php/Contact/index" ?>">Liên Hệ</a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="<?php echo WEBROOT."index.php/Oder/index/ALL/1" ?>">Đơn Mua</a>
		        </li>
		        <?php if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="2")){?>
		         <li class="nav-item dropdown" style="z-index:1;">
				   <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  >
				        Quản Trị
				     </a>
				   <div class="dropdown-menu">
				       <a class="dropdown-item"  href="<?php echo WEBROOT."index.php/ProductAdmin/index/ALL/1" ?>">Xe</a>
				       <a class="dropdown-item" href="<?php echo WEBROOT."index.php/User/index/ALL/1";?>">Tài Khoản</a>
				       <a class="dropdown-item" href="<?php echo WEBROOT."index.php/NewsAdmin/index/ALL/1";?>">Tin Tức</a>
				       <a class="dropdown-item" href="<?php echo WEBROOT."index.php/ContactAdmin/index/ALL/1";?>">Hỏi Đáp</a>
				       <a class="dropdown-item" href="<?php echo WEBROOT."index.php/ListProduct/index/ALL/1";?>">Loại Xe</a>
				       <a class="dropdown-item" href="<?php echo WEBROOT."index.php/ListNew/index/ALL/1";?>">Loại Tin Tức</a>
				       <a class="dropdown-item" href="<?php echo WEBROOT."index.php/CartAdmin/index/ALL/1"?>">Đơn hàng</a>

				    </div>
				
			   </li>
			<?php }?>	
		      </ul>
		     <?php  if($this->segments->controller == 'News') {
			echo "<form class='form-inline my-2 my-lg-0' name='search' action='".WEBROOT."index.php/News/abc' method='post'>"."
		        <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='contentsearch'>
		        <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i class='fa fa-search'></i></button>
		    </form> ";
		} else{
		    	echo " <form class='form-inline my-2 my-lg-0' name='search' action='".WEBROOT."index.php/Product/abc' 
		    	method='post' >"."
		         <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='contentsearch'>
		        <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i class='fa fa-search'></i></button>
		    </form> ";
		    }
	 ?>
		    </div>
	  </nav>
	</div>
	<div>
	<marquee style="background-color: black; color: white; font-size: 24px; padding-top:10px"><p><b>Chào mừng quý khách đến với CARVIET. Chúc quý khách có những trải nghiệm tuyệt vời cùng CARVIET chúng tôi!</b></p>
	</marquee>
	</div>