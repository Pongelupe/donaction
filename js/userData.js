function userInput () {
	var userName = document.getElementById('name').value;
	var userEmail = document.getElementById('email').value;
	var userPhone = document.getElementById('phone').value;
	var userLocation = document.getElementById('location').value;
	var userBlood = document.getElementById('blood').value;
	var userData = {
		"userName": userName,
		"userEmail": userEmail,
		"userPhone": userPhone,
		"userLocation": userLocation,
		"userBlood": userBlood
	};
	
	var sendData = JSON.stringify(userData);
	$.ajax({
	    url:"https://api.myjson.com/bins",
	    type:"POST",
	    data: sendData,
	    contentType:"application/json; charset=utf-8",
	    dataType:"json",
	    success: function(data, textStatus, jqXHR){
	    	swal({
			  title: "Cadastro Realizado",
			  type: "success",
			  confirmButtonText: "Continuar"
			});
	    	var userUri = data.uri;
	    	breakUri(userUri)
	    }
	});   
}

function breakUri (userUri) {
	var splittedURL = userUri.split(/\/+/g);
	var userId = splittedURL[splittedURL.length-1];
}