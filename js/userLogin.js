function userLogin () {
	event.preventDefault();
	var userEmail = document.getElementById("userEmail").value;
	var userPassword = document.getElementById("userPassword").value;
	$.get("https://api.myjson.com/bins/" + userPassword, function(data, textStatus, jqXHR) {
		var userSession = JSON.parse(jqXHR.responseText);
		var userLogin = userSession.userEmail;
		if (userLogin == userEmail) {
			alert("Login realizado com sucesso!");
			localStorage.setItem("userData", JSON.stringify(userSession));
			location.href = ("pages/receptorInfo.php")
		} else {
			alert("dados inválidos!")
		}
	})
}
