<h2><center>Đăng Nhập</center></h2>
<center><form name="frmlogin" method="post" action="<?php echo WEBROOT.'index.php/user/login';?>" style="width: 30%" >
  <div class="form-group"  >
    <label for="taikhoan">Tên tài khoản:</label>
    <input type="text" class="form-control" name="taikhoan">
  </div>
  <div class="form-group">
    <label for="matkhau">Mật khẩu:</label>
    <input type="password" class="form-control" name="matkhau">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Đăng nhập</button>

</form></center>