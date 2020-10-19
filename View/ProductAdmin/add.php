<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ProductAdmin/add'?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã Sản Phẩm:</label>
    <input type="text" class="form-control" name="masanpham">
  </div>
  <div class="form-group">
    <label for="maloai">Mã lọai:</label>
    <select name="maloai">
         <?php
      foreach($categories as $category)
      {
        echo "<option value='".$category['maloai']."'>".$category['tenloai']."</option>";
      }
      ?>
    </select>
  </div>
   <div class="form-group">
    <label for="tenloai">Tên Sản Phẩm:</label>
    <input type="text" class="form-control" name="tensanpham">
  </div>
  <div class="form-group">
    <label for="maloai">Giá:</label>
    <input type="text" class="form-control" name="gia">
  </div>
  <div class="form-group">
    <label for="anh">:Ảnh</label>
    <input type="file" class="form-control" name="anh">
  </div>
  <div class="form-group">
    <label for="maloai">:Loại Sản Phẩm</label>
    <input type="text" class="form-control" name="loaisanpham">
  </div>
  <div class="form-group">
    <label for="maloai">:Dạng Bào Chế</label>
    <input type="text" class="form-control" name="dangbaoche">
  </div>
  <div class="form-group">
    <label for="maloai">:Quy Cách Sản Phẩm</label>
    <input type="text" class="form-control" name="quycachsanpham">
  </div>
  <div class="form-group">
    <label for="maloai">:Hàm Lượng</label>
    <input type="text" class="form-control" name="hamluong">
  </div>
  <div class="form-group">
    <label for="maloai">:Thành Phần</label>
    <input type="text" class="form-control" name="thanhphan">
  </div>
  <div class="form-group">
    <label for="maloai">:Công Dụng</label>
    <input type="text" class="form-control" name="congdung">
  </div>
  <div class="form-group">
    <label for="maloai">:Dối Tượng</label>
    <input type="text" class="form-control" name="doituong">
  </div>
  <div class="form-group">
    <label for="maloai">:Cách Dùng</label>
    <input type="text" class="form-control" name="cachdung">
  </div>
  <div class="form-group">
    <label for="maloai">:Lưu ý</label>
    <input type="text" class="form-control" name="luuy">
  </div>
  <div class="form-group">
    <label for="maloai">:Bảo Quản</label>
    <input type="text" class="form-control" name="baoquan">
  </div>
  <div class="form-group">
    <label for="maloai">:Hạn Sử Dụng</label>
    <input type="text" class="form-control" name="hansudung">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Thêm Sản Phẩm</button>
</form>