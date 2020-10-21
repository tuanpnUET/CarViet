<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/NewsAdmin/edit'.$NewsAdmin['matintuc']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="matintuc">Mã Tin Tức:</label>
    <input type="text" class="form-control" name="matintuc" value="<?php echo $NewsAdmin['matintuc']; ?>">
  </div>
  <div class="form-group">
    <label for="maloaitintuc">Mã Loại Tin Tức:</label>
    <input type="text" class="form-control" name="maloaitintuc" value="<?php echo $NewsAdmin['maloaitintuc']; ?>">
  </div>
   <div class="form-group">
    <label for="tentintuc">Tên Tin Tức:</label>
    <input type="text" class="form-control" name="tentintuc" value="<?php echo $NewsAdmin['tentintuc']; ?>">
  </div>
  <div class="form-group">
    <label for="noidungtin">Nội Dung Tin:</label>
    <input type="text" class="form-control" name="noidungtin" value="<?php echo $NewsAdmin['noidungtin']; ?>">
  </div>
  <div class="form-group">
    <label for="anh">:Ảnh</label>
    <input type="text" class="form-control" name="anh" value="<?php echo $NewsAdmin['anh']; ?>">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Sửa Thông Tin</button>
</form>