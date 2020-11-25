<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ShowroomAdmin/edit'.$ShowroomAdmin['id']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="tenshowroom">Tên Showroom:</label>
    <input type="text" class="form-control" name="tenshowroom" value="<?php echo $ShowroomAdmin['tenshowroom']; ?>">
  </div>
  <div class="form-group">
    <label for="diachi">Địa Chỉ:</label>
    <input type="text" class="form-control" name="diachi" value="<?php echo $ShowroomAdmin['diachi']; ?>">
  </div>
  <div class="form-group">
    <label for="hotline">Hotline:</label>
    <input type="text" class="form-control" name="hotline" value="<?php echo $ShowroomAdmin['hotline']; ?>">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green; color: white; ">Xác nhận Sửa</button>
</form>