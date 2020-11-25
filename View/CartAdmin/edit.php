<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/CartAdmin/edit'.$CartAdmin['madon']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="madon">Mã Đơn:</label>
    <input type="text" class="form-control" name="madon" value="<?php echo $CartAdmin['madon']; ?>">
  </div>
  <div class="form-group">
    <label for="hoten">Người Đặt Hẹn:</label>
    <input type="text" class="form-control" name="hoten" value="<?php echo $CartAdmin['hoten']; ?>">
  </div>
  <div class="form-group">
    <label for="ngayhen">Ngày Hẹn:</label>
    <input type="text" class="form-control" name="ngayhen" value="<?php echo $CartAdmin['ngayhen']; ?>">
  </div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái:</label>
    <input type="text" class="form-control" name="trangthai" value="<?php echo $CartAdmin['trangthai']; ?>">
  </div>  
  <button type="submit" class="btn btn-default" style="background-color: green;color: white;">Sửa</button>
</form>