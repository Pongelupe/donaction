function userSession() {
	userData = JSON.parse(localStorage.getItem("userData"));
	document.getElementById("userName").innerHTML = userData.userName;
	document.getElementById("email").value = userData.userEmail;
	document.getElementById("phone").value = userData.userPhone;
	document.getElementById("city").value = userData.userLocation;
}

function clearField(inputId) {
	document.getElementById(inputId).value = "";
}

function updateData() {
	event.preventDefault();
	userData = JSON.parse(localStorage.getItem("userData")); 
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