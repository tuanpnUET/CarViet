
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ListNew/add' ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã loại tin tức</label>
    <input type="text" class="form-control" name="maloaitintuc" >
  </div>
  <div class="form-group">
    <label for="tenloai">Tên Loại tin tuc </label>
    <input type="text" class="form-control" name="tenloaitintuc" >
  </div>
 
  <button type="submit" class="btn btn-default" style="background-color: green ">Thêm Sản Phẩm </button>
</form>