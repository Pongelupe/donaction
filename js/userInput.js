function userInput () {
	var isValid = validateForm();
	if ( isValid == false ) {
		swal(
		  'Campo em Branco',
		  'Todos os campos são obrigatórios',
		  'error'
		)
		event.preventDefault();
	} else {
		var userName = document.getElementById('name').value;
		var userEmail = document.getElementById('email').value;
		var userPhone = document.getElementById('phone').value;
		var userLocation = document.getElementById('location').value;
		var userBlood = document.getElementById('blood').value;
		
		// Array's declaration and values assignement
		var userData = {}; 
		userData.id = "";
		userData.userName = userName;
		userData.userEmail = userEmail;
		userData.userPhone = userPhone;
		userData.userLocation = userLocation;
		userData.userBlood = userBlood;
		
		var sendData = JSON.stringify(userData);
		
		$.ajax({
		    url:"https://api.myjson.com/bins",
		    type:"POST",
		    data: sendData,
		    contentType:"application/json; charset=utf-8",
		    dataType:"json",
		    success: function(data, textStatus, jqXHR){
		    	var userUri = data.uri;
		    	userId = breakUri(userUri);
		    	pushId(userData, userId);
		    	swal({
				  html: true,
				  title: "Senha de Acesso: " + userId,
				  text: "Guarde essa senha para entrar na sua sessão",
				  type: "success",
				  confirmButtonText: "Continuar",
				  closeOnConfirm: false,
				},    	  
				  function() {
				  	location.href = "../index.php"
				 }
				)
		    }
		});   
	}
}

// Function to break the URI and get the ID
function breakUri(userUri) {
	var splittedURL = userUri.split(/\/+/g);
	var userId = splittedURL[splittedURL.length-1];
	return userId
}

//Function to update the object with the user's ID
function pushId(userData, userId) {
	userData.id = userId;
	sendData = JSON.stringify(userData);
	$.ajax({
    url:"https://api.myjson.com/bins/" + userId,
    type:"PUT",
    data: sendData,
    contentType:"application/json; charset=utf-8",
    dataType:"json",
});   
}

//Function to valdiate the form
function validateForm() {
	if (document.getElementsByTagName("input")[0].value == "" || document.getElementsByTagName("input")[1].value == "" || document.getElementsByTagName("input")[2].value == "" || document.getElementsByTagName("input")[3].value == "" || document.getElementsByTagName("input")[4].value == "") {
		return false;
	} else {
		return true;
	}
}