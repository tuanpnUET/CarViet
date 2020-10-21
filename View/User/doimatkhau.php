<center><form name="frmthem" method="POST" action="<?php WEBROOT . 'index.php/user/doimatkhau' ?>" enctype="multipart/form-data" style="width: 50%">
  <h2>Đổi Mật Khẩu</h2>
  <div class="form-group">
    <label for="matkhaumoi">Tài khoản:</label>
    <input type="text" class="form-control" name="taikhoan" value="<?php echo $_SESSION["user"] ?>" readonly>
  </div>
  <div class="form-group">
    <label for="xacnhanmatkhau">Mật khẩu hiện tại:</label>
    <input type="PassWord" class="form-control" name="matkhaucu">
  </div>
  <div class="form-group">
    <label for="xacnhanmatkhau">Mật khẩu mới:</label>
    <input type="PassWord" class="form-control" name="matkhaumoi">
  </div>
  <!-- <div class="form-group">
    <label for="xacnhanmatkhau">Xác nhận mật khẩu:</label>
    <input type="PassWord" class="form-control" name="xacnhanmatkhau">
  </div> -->

  <button type="submit" class="btn btn-default" style="background-color: green;color: white;">Đổi Mật Khẩu</button>
</form></center>