
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/ProductAdmin/edit'.$ProductAdmin['masanpham']; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="maloai">Mã Sản Phẩm</label>
    <input type="text" class="form-control" name="masanpham" value="<?php echo $ProductAdmin['masanpham']; ?>"
>
  </div>
  <div class="form-group">
    <label for="tenloai">Mã Loại </label>
    <input type="text" class="form-control" name="maloai" value="<?php echo $ProductAdmin['maloai']; ?>"
>
  </div>
   <div class="form-group">
    <label for="tenloai">Tên Sản Phẩm</label>
    <input type="text" class="form-control" name="tensanpham" value="<?php echo $ProductAdmin['tensanpham']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Giá</label>
    <input type="text" class="form-control" name="gia" value="<?php echo $ProductAdmin['gia']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Ảnh</label>
    <input type="text" class="form-control" name="anh" value="<?php echo $ProductAdmin['anh']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Loại Sản Phẩm</label>
    <input type="text" class="form-control" name="loaisanpham" value="<?php echo $ProductAdmin['loaisanpham']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Dạng Bào Chế</label>
    <input type="text" class="form-control" name="dangbaoche" value="<?php echo $ProductAdmin['dangbaoche']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Quy Cách Sản Phẩm</label>
    <input type="text" class="form-control" name="quycachsanpham" value="<?php echo $ProductAdmin['quycachsanpham']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Hàm Lượng</label>
    <input type="text" class="form-control" name="hamluong" value="<?php echo $ProductAdmin['hamluong']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Thành Phần</label>
    <input type="text" class="form-control" name="thanhphan" value="<?php echo $ProductAdmin['thanhphan']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Công Dụng</label>
    <input type="text" class="form-control" name="congdung" value="<?php echo $ProductAdmin['congdung']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Đối Tượng</label>
    <input type="text" class="form-control" name="doituong" value="<?php echo $ProductAdmin['doituong']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Cách Dùng</label>
    <input type="text" class="form-control" name="cachdung" value="<?php echo $ProductAdmin['cachdung']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Lưu ý</label>
    <input type="text" class="form-control" name="luuy" value="<?php echo $ProductAdmin['luuy']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Bảo Quản</label>
    <input type="text" class="form-control" name="baoquan" value="<?php echo $ProductAdmin['baoquan']; ?>"
>
  </div>
  <div class="form-group">
    <label for="maloai">Hạn Sử Dụng</label>
    <input type="text" class="form-control" name="hansudung" value="<?php echo $ProductAdmin['hansudung']; ?>"
>
  </div>
  <button type="submit" class="btn btn-default" style="background-color: green ">Sửa Sản Phẩm </button>
</form>