
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ListProduct/edit'.$ListProduct['maloai']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã Loại Sản Phẩm</label>
    <input type="text" class="form-control" name="maloai" value="<?php echo $ListProduct['maloai']; ?>"
>
  </div>
  <div class="form-group">
    <label for="tenloai">Tên Loại Sản Phẩm </label>
    <input type="text" class="form-control" name="tenloai" value="<?php echo $ListProduct['tenloai']; ?>"
>

  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Sửa Sản Phẩm </button>
</form>