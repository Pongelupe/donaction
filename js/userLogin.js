function userLogin() {
    event.preventDefault();
    var userEmail = document.getElementById("userEmail").value;
    var userPassword = document.getElementById("userPassword").value;
    $.get("https://api.myjson.com/bins/" + userPassword, function(data, textStatus, jqXHR) {
        var userSession = JSON.parse(jqXHR.responseText);
        var userLogin = userSession.userEmail;
        var userType = userSession.canDonate;
        if (userLogin == userEmail) {
            if (userType == undefined) {
                alert("Login realizado com sucesso! Paciente");
                localStorage.setItem("userData", JSON.stringify(userSession));
                location.href = ("pages/user.php");
            } else {
                alert("Login realizado com sucesso! Doador");
                localStorage.setItem("userData", JSON.stringify(userSession));
                location.href = ("pages/user.php")
            }
        }
    })
}