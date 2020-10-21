
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ListNew/edit'.$ListNew['maloaitintuc']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã Loại Tin Tức</label>
    <input type="text" class="form-control" name="maloai" value="<?php echo $ListNew['maloaitintuc']; ?>"
>
  </div>
  <div class="form-group">
    <label for="tenloai">Tên Loại Tin Tức </label>
    <input type="text" class="form-control" name="tenloai" value="<?php echo $ListNew['tenloaitintuc']; ?>"
>
  </div>
  
  <button type="submit" class="btn btn-default" style="background-color: green ">Sửa Sản Phẩm </button>
</form>