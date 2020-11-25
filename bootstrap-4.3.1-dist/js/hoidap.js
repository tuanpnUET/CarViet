function hoidap() {
	var data = new Array();
	data[0]=document.getElementById('hoten').value;
	data[1]=document.getElementById('diachi').value;
	data[2]=document.getElementById('sdt').value;
	data[3]=document.getElementById('email').value;
	data[4]=document.getElementById('hoidap').value;
	var myerror = new Array();
	myerror[0] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập tên</span>";
	myerror[1] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập địa chỉ</span>";
	myerror[2] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập số điện thoại</span>";
	myerror[3] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập email</span>";
	myerror[4] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập câu hỏi</span>"

	var fixerror = new Array();
	fixerror[0] = "<span style='color:red,font-weight:bold'>Hãy nhập họ tên bằng tiếng Việt không dấu</span>";
	fixerror[1] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập địa chỉ</span>";
	fixerror[2] = "<span style='color:red,font-weight:bold'>Hãy nhập đúng số điện thoại</span>"
	fixerror[3] = "<span style='color:red,font-weight:bold'>Hãy nhập đúng email</span>"
	fixerror[4] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập câu hỏi</span>"

	var nearby = new Array("z-hoten","z-diachi","z-sdt","z-email","z-cauhoi");

	var kt = new Array();
	var kt[0]=/^[a-zA-Z ]{1,}$/;
	var kt[1]=;
	var kt[2]=/^[0-9]{10,11}$/;
	var kt[3]=/(\w(=?@)\w+\.{1}[a-zA-Z]{2,})/i;
	var kt[4]=;

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
