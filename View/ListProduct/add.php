
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ListProduct/add' ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloaixe">Mã Loại Xe</label>
    <input type="text" class="form-control" name="maloaixe" >
  </div>
  <div class="form-group">
    <label for="tenloaixe">Tên Loại Xe </label>
    <input type="text" class="form-control" name="tenloaixe" >
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Thêm Loại Xe</button>
</form>