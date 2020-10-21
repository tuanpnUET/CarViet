<?php require_once(ROOT . 'Model/Category.php');?>
<div >
	<ul class="list-group">	
		<li class="list-group-item" style="background:#209634; color: white">Danh Mục Sản Phẩm</li>
		<?php 
		$category=new Category();
		$Categories=$category->getAll();
		foreach($Categories as $Category)
		{
			echo "<li class='list-group-item'><a href='".WEBROOT."index.php/Product/index/".$Category['maloai']."/1"."'>".$Category['tenloai']."</a></li>";
		}
		?>
	</ul>
</div>
<?php  if($this->segments->controller == 'product' ){
			echo "<div style='margin-top:10%;'>";
				echo "<center><img src='".WEBROOT."image/quangcao.jpg' alt='logo' style='width:100%;height:65%'></center>";
				echo "</div>";
			}
?>