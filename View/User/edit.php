<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/User/edit'.$User['id']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Tên tài khoản:</label>
    <input type="text" class="form-control" name="taikhoan" value="<?php echo $User['taikhoan']; ?>">
  </div>
  <div class="form-group">
    <label for="tenloai">Mật khẩu:</label>
    <input type="password" class="form-control" name="matkhau" value="<?php echo $User['matkhau']; ?>">
  </div>
   <div class="form-group">
    <label for="tenloai">Quyền:</label>
    <input type="text" class="form-control" name="matkhau" value="<?php echo $User['quyen']; ?>">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green;color: white;">Sửa</button>
</form>