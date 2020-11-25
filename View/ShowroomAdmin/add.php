<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ShowroomAdmin/add.php' ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="tenshowroom">Tên Showroom:</label>
    <input type="text" class="form-control" name="tenshowroom" id="tenshowroom><div id="z-tenshowroom"></div>
  </div>
  <div class="form-group">
    <label for="diachi">Địa Chỉ:</label>
    <input type="text" class="form-control" name="diachi" id="diachi"><div id="z-diachi" ></div>
  </div>
  <div class="form-group">
    <label for="hotline">Hotline:</label>
    <input type="text" class="form-control" name="hotline" id="hotline"><div id="z-hotline" ></div>
  </div>
   
  <button type="submit" class="btn btn-default" style="background-color: black, color: white; ">Thêm Showroom</button>
</form>