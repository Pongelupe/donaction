function userLogin() {
    event.preventDefault();
    var userEmail = document.getElementById("userEmail").value;
    var userPassword = document.getElementById("userPassword").value;
    $.get("https://api.myjson.com/bins/" + userPassword, function(data, textStatus, jqXHR) {
        var userSession = JSON.parse(jqXHR.responseText);
        var userLogin = userSession.userEmail;
        var userType = userSession.canDonate;
        if (userLogin == userEmail) {
            localStorage.setItem("userData", JSON.stringify(userSession));
            location.href = ("pages/userPageValidation.php");
        } else{
            sweetAlert("Login inválido!","","error");
        }
    })
}