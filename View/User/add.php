<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/User/add' ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Tên tài khoản:</label>
    <input type="text" class="form-control" name="taikhoan" id="taikhoan" onkeyup="dangky()"><div id="z-taikhoan"></div>
  </div>
  <div class="form-group">
    <label for="tenloai">Mật khẩu:</label>
    <input type="password" class="form-control" name="matkhau" id="matkhau" onkeyup="dangky()"><div id="z-matkhau" ></div>
  </div>
   
  <button type="submit" class="btn btn-default" style="background-color: green ">Thêm tài khoản</button>
</form>