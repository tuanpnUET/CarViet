
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ListProduct/add' ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã Loại Sản Phẩm</label>
    <input type="text" class="form-control" name="maloai" >
  </div>
  <div class="form-group">
    <label for="tenloai">Tên Loại Sản Phẩm </label>
    <input type="text" class="form-control" name="tenloai" >
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Thêm Sản Phẩm </button>
</form>