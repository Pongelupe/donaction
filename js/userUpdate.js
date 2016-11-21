function userSession() {
	var userData = JSON.parse(localStorage.getItem("userData"));
	document.getElementById("userAvatar").src = "https://api.adorable.io/avatars/180/" + userData.id + ".png";
	document.getElementById("userName").innerHTML = userData.userName;
	document.getElementById("userBlood").innerHTML = userData.userBlood;
	document.getElementById("email").value = userData.userEmail;
	document.getElementById("phone").value = userData.userPhone;
	document.getElementById("city").value = userData.userLocation;
}

function clearField(inputId) {
	document.getElementById(inputId).value = "";
}

function updateData() {
	event.preventDefault();
	var userData = JSON.parse(localStorage.getItem("userData")); 
	var newEmail = document.getElementById("email").value;
	var newPhone = document.getElementById("phone").value;
	var newLocation = document.getElementById("city").value;
	var sendData = {
		"id": userData.id,
		"userName": userData.userName,
		"userEmail": newEmail,
		"userPhone": newPhone,
		"userLocation": newLocation,
		"userBlood": userData.userBlood
	};
	sendData = JSON.stringify(sendData);
	$.ajax({
    url:"https://api.myjson.com/bins/" + userData.id,
    type:"PUT",
    data: sendData,
    contentType:"application/json; charset=utf-8",
    dataType:"json",
    success: function(data, textStatus, jqXHR){
    	alert("Dados atualizados");
    	localStorage.setItem("userData", sendData)
    }
});  
}
	

function notBlank (inputId) {
	var userData = JSON.parse(localStorage.getItem("userData"));
	var inputValue = document.getElementById(inputId).value;
	
	if (inputValue == "" && inputId == "email") {
		document.getElementById(inputId).value = userData.userEmail
	}

	if (inputValue == "" && inputId == "phone") {
		document.getElementById(inputId).value = userData.userPhone
	}

	if (inputValue == "" && inputId == "city") {
		document.getElementById(inputId).value = userData.userLocation
	}
}

function endSession() {
	localStorage.removeItem("userData");
	for (i = 0; i < 3; i++) {
		document.getElementsByTagName("input")[i].value = "";
	}
	history.go(-1);
}