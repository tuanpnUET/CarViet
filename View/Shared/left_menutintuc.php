<?php require_once(ROOT . 'Model/CategoryTinTuc.php');?>
<div >
	<ul class="list-group">	
		<li class="list-group-item" style="background:#209634; color: white">Danh Mục Tin Tức</li>
		<?php 
		$CategoryTin=new CategoryTinTuc();
		$CategoriesTinTuc=$CategoryTin->getAll();
		foreach($CategoriesTinTuc as $CategoryTin)
		{
			echo "<li class='list-group-item'><a href='".WEBROOT."index.php/News/index/".$CategoryTin['maloaitintuc']."/1"."'>".$CategoryTin['tenloaitintuc']."</a></li>";
		}
		?>
	</ul>
</div>
		<?php  if($this->segments->controller == 'News'){
			echo "<div style='margin-top:10%;'>";
				echo "<center><img src='".WEBROOT."image/quangcao.jpg' alt='logo' style='width:100%;height:80%'></center>";
				echo "</div>";
			}
?>