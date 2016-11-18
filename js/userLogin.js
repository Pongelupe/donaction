function userLogin () {
	var userName = document.getElementById("userName").value;
	var userPassword = document.getElementById("userPassword").value;
	$.get("https://api.myjson.com/bins/" + userPassword, function(data, textStatus, jqXHR) {
		var userSession = JSON.parse(jqXHR.responseText);
		var userLogin = userSession.userName;
		console.log("Chegou Aqui!");

		if (userLogin == userName) {
			alert("login feito!")
		} 
	})
}

