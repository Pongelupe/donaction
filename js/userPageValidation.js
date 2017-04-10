function validarVoucher(){
	var data = $('#dataVoucher').data('date');
	var codigo = document.getElementById('inputCodigo').value;
	if (data ==undefined || codigo =="") {
		sweetAlert("Voucher inválido!","","error");
	} else {
		sweetAlert("Voucher válido","Resgate pelo email!","success");
	}
};