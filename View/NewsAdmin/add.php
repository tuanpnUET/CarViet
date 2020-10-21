<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/NewsAdmin/add' ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã Tin Tức:</label>
    <input type="text" class="form-control" name="matintuc">
  </div>
  <div class="form-group">
    <label for="maloaitintuc">Mã lọai Tin Tức:</label>
    <select name="maloaitintuc">
      <?php
      foreach($CategoriesTinTuc as $CategoryTin)
      {
        echo "<option value='".$CategoryTin['maloaitintuc']."'>".$CategoryTin['tenloaitintuc']."</option>";
      }
      ?>
    </select>
  </div>
   <div class="form-group">
    <label for="tenloai">Tên Tin Tức:</label>
    <input type="text" class="form-control" name="tentintuc">
  </div>
  <div class="form-group">
    <label for="maloai">Nội Dung Tin:</label>
    <input type="text" class="form-control" name="noidungtin">
  </div>
  <div class="form-group">
    <label for="anh">:Ảnh</label>
    <input type="file" class="form-control" name="anh">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Thêm Sản Phẩm</button>
</form>