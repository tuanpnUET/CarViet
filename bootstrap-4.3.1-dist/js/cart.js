function check(){
	var data = new Array();
	data[0] = document.getElementById('Hoten').value;
	data[1] = document.getElementById('Dienthoai').value;
	data[2] = document.getElementById('Diachi').value;
	data[3] = document,getElementById('Email').value;

	var myerror = new Array();
	myerror[0] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập tên</span>";
	myerror[1] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập số điện thoại</span>";
	myerror[2] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập địa chỉ</span>";
	myerror[3] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập email</span>";

	var fixerror = new Array();
	fixerror[0] = "<span style='color:red,font-weight:bold'>Hãy nhập họ tên bằng tiếng Việt không dấu</span>";
	fixerror[1] = "<span style='color:red,font-weight:bold'>Hãy nhập đúng số điện thoại</span>";
	fixerror[2] = "<span style='color:red,font-weight:bold'>Hãy nhập địa chỉ</span>"
	fixerror[3] = "<span style='color:red,font-weight:bold'>Hãy nhập đúng email</span>"

	var nearby = new Array("z-hoten","z-dienthoai","z-diachi","z-email");

	var kt = new Array();
	var kt[0]=/^[a-zA-Z ]{1,}$/;
	var kt[1]=/^[0-9]{10,11}$/;
	var kt[2]=;
	var kt[3]=/(\w(=?@)\w+\.{1}[a-zA-Z]{2,})/i;

	for (i in data){
		var error = myerror[i];
		var div = nearby[i];

		if (data[i]=""){
			document,getElementById(div).innterHTML=error;
		} else {
			if (kt[i].test(data[i]))
			document.getElementById(div).innter = "OK!"; else document.getElementById(div).innterHTML=fixerror[i];
		}
	}
}