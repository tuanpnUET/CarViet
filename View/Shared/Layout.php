<html>
<head>
	<title> </title>
		<meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no">
		<?php echo "<link rel='stylesheet' type='text/css' href='".WEBROOT."font-awesome/css/font-awesome.min.css'>";?>
		<?php echo "<link rel='stylesheet' type='text/css' href='".WEBROOT."bootstrap-4.3.1-dist/css/bootstrap.min.css'>";?>
		<?php echo "<link rel='stylesheet' href='".WEBROOT."Content/style4.css'>";?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>

<body>

<div class="container-fuild">	

		<?php  if($this->segments->controller == 'Home'){
			$classLeft= "col-lg-3 col-12 ";
			$classRight = "col-lg-9 col-12";
			$classCenter = ' col-lg-12 col-12';
		} elseif ($this->segments->controller == 'Product' || $this->segments->controller == 'product' || $this->segments->controller == 'News' || $this->segments->controller == 'news' && $this->segments->action == 'index') {
			$classLeft = "Col-lg-3 col-12";
			$classRight = "d-none";
			$classCenter = "col-lg-9 col-12";
		}
		else {
			$classLeft = "d-none";
			$classRight = "d-none";
			$classCenter = "col-lg-12 col-12";
		}

		?>





		




	<?php 
			
				require("header.php");
			?>
		
	<div class="row" id="Main" style="margin-top: 1%">
		<?php  if($this->segments->controller == 'Product' || $this->segments->controller == 'product' || $this->segments->controller == 'Home' ): ?>
		<div id="left" class=" <?php echo $classLeft; ?>">
			<?php require("left_menu.php");?>
		</div>
		<?php endif; ?>
		<?php  if($this->segments->controller == 'News'): ?>
		<div id="left" class=" <?php echo $classLeft; ?>">
			<?php require("left_menutintuc.php");?>
		</div>
		<?php endif; ?>
		<div id="right" class=" <?php echo $classRight; ?>"> 
			<?php require("center_menu.php");?>
		</div>
		<div  class="<?php echo $classCenter; ?>" style = "padding: 0% 2%"  >
		<?php
			echo $content_for_layout;
		?>
		</div>

	</div>

	<div style="margin-top: 3%;">
	<?php
			require("footer.php");
	?>
	</div>
</div>










	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>