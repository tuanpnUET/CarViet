
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ProductAdmin/edit'.$ProductAdmin['maxe']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maxe">Mã Xe</label>
    <input type="text" alt="disabled" class="form-control" name="maxe" value="<?php echo $ProductAdmin['maxe']; ?>">
  </div>
  <div class="form-group">
    <label for="maloaixe">Mã Loại xe</label>
    <input type="text" class="form-control" name="maloaixe" value="<?php echo $ProductAdmin['maloaixe']; ?>">
  </div>
   <div class="form-group">
    <label for="tendongxe">Tên dòng xe</label>
    <input type="text" class="form-control" name="tendongxe" value="<?php echo $ProductAdmin['tendongxe']; ?>">
  </div>
  <div class="form-group">
    <label for="gia">Giá</label>
    <input type="text" class="form-control" name="gia" value="<?php echo $ProductAdmin['gia']; ?>">
  </div>
  <div class="form-group">
    <label for="maloai">Ảnh</label>
    <input type="text" class="form-control" name="anh" value="<?php echo $ProductAdmin['anh']; ?>">
  </div>
  <div class="form-group">
    <label for="mota">Mô tả</label>
    <input type="text" class="form-control" name="mota" value="<?php echo $ProductAdmin['mota']; ?>">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: black; color: red;">Sửa </button>
</form>