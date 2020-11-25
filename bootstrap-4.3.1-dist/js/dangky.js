function dangky(){
	var data = new Array();
	data[0]=document.getElementById('taikhoan').value;
	data[1]=document.getElementById('matkhau').value;
	
	
	var myerror = new Array();
	myerror[0] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập tài khoản</span>";
	myerror[1] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập mật khẩu</span>";
	

	var fixerror = new Array();
	fixerror[0] = "<span style='color:red,font-weight:bold'>Hãy nhập lại tài khoản</span>";
	fixerror[1] = "<span style='color:red,font-weight:bold'>Hãy nhập lại mật khẩu</span>";
	

	var nearby = new Array("z-taikhoan","z-matkhau",);

	var kt = new Array();
	var kt[0]=/^[a-zA-Z0-9][^ ]{5,30}$/;
	var kt[1]=/^[a-zA-Z0-9]{1,}$/;
	

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