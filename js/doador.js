var questionario="";
function createUser() {
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var location = document.getElementById("location").value;
	var blood = document.getElementById("bloody").value;
	var data = {
		"name": name,
		"email": email,
		"phone": phone,
		"blood": blood,
		"location": location,
		"status": questionario
	};
	var sendData = JSON.stringify(data);
	/*var myArray=[data.name,data.email,data.phone,data.location,data.status];
	var ok =validator(myArray);*/

	if (ok==true) {
	$.ajax({
	    url:"https://api.myjson.com/bins",
	    type:"POST",
	    data: sendData,
	    contentType:"application/json; charset=utf-8",
	    dataType:"json",
	    success: function(data, textStatus, jqXHR){
	    	var userUri = data.uri;
	    	userId = breakUri(userUri);
	    	swal({
			  html: true,
			  title: "Senha de Acesso: " + userId,
			  text: "Guarde essa senha para entrar na sua sessão",
			  type: "success",
			  confirmButtonText: "Continuar",
			  closeOnConfirm: false,
			},    	  
			  function() {
			  	location.href = "/..index.php";
			 }
			)
	    }
	});   
}
}

function breakUri (userUri) {
	var splittedURL = userUri.split(/\/+/g);
	var userId = splittedURL[splittedURL.length-1];
	return userId
}

function checkbox_config(x){
	questionario=x;
}

function validator(x){
	for (var i = 0; i < x.length; i++) {
		if (x[i]=="") {
			swal({
			  title: "Preencha todos os campos",
			  type: "error",
			  confirmButtonText: "Voltar"
			});
			return false;
		}
	}
	return true;
}