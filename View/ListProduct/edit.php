
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ListProduct/edit'.$ListProduct['maloaixe']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloaixe">Mã Loại Xe</label>
    <input type="text" class="form-control" name="maloai" value="<?php echo $ListProduct['maloaixe']; ?>"
>
  </div>
  <div class="form-group">
    <label for="tenloaixe">Tên Loại Xe</label>
    <input type="text" class="form-control" name="tenloai" value="<?php echo $ListProduct['tenloaixe']; ?>"
>

  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Sửa </button>
</form>