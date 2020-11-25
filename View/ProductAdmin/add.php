<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ProductAdmin/add'?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maxe">Mã Xe:</label>
    <input type="text" class="form-control" name="maxe">
  </div>
  <div class="form-group">
    <label for="maloaixe">Mã loại xe:</label>
    <select name="maloaixe">
         <?php
      foreach($categories as $category)
      {
        echo "<option value='".$category['maloaixe']."'>".$category['tenloaixe']."</option>";
      }
      ?>
    </select>
  </div>
   <div class="form-group">
    <label for="tendongxe">Tên Dòng Xe:</label>
    <input type="text" class="form-control" name="tendongxe">
  </div>
  <div class="form-group">
    <label for="gia">Giá:</label>
    <input type="text" class="form-control" name="gia">
  </div>
  <div class="form-group">
    <label for="anh">Ảnh:</label>
    <input type="file" class="form-control" name="anh">
  </div>
  <div class="form-group">
    <label for="mota">Mô tả:</label>
    <input type="text" class="form-control" name="mota">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: black; color: white; ">Thêm Xe Mới</button>
</form>