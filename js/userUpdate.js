function userFirstSession() {
    classActive();
    var userData = JSON.parse(localStorage.getItem("userData"));
    document.getElementById("userAvatar").src = "https://api.adorable.io/avatars/180/" + userData.id + ".png";
    document.getElementById("userName").innerHTML = userData.userName;
    document.getElementById("userBlood").innerHTML = userData.userBlood;
}

function userSession() {
    classActive();
    var userData = JSON.parse(localStorage.getItem("userData"));
    document.getElementById("userAvatar").src = "https://api.adorable.io/avatars/180/" + userData.id + ".png";
    document.getElementById("userName").innerHTML = userData.userName;
    document.getElementById("userBlood").innerHTML = userData.userBlood;
    document.getElementById("email").value = userData.userEmail;
    document.getElementById("city").value = userData.userLocation;
}

function clearField(inputId) {
    document.getElementById(inputId).value = "";
}

function updateData() {
    event.preventDefault();
    var userData = JSON.parse(localStorage.getItem("userData"));
    var newEmail = document.getElementById("email").value;
    var newLocation = document.getElementById("city").value;
    var sendData = {
        "id": userData.id,
        "userName": userData.userName,
        "userEmail": newEmail,
        "userLocation": newLocation,
        "userBlood": userData.userBlood
    };
    sendData = JSON.stringify(sendData);
    $.ajax({
        url: "https://api.myjson.com/bins/" + userData.id,
        type: "PUT",
        data: sendData,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data, textStatus, jqXHR) {
            swal("Dados Alterados", "As alterações foram realizadas com sucesso", "success")
            localStorage.setItem("userData", sendData)
        }
    });
}

function notBlank(inputId) {
    var userData = JSON.parse(localStorage.getItem("userData"));
    var inputValue = document.getElementById(inputId).value;
    if (inputValue == "" && inputId == "email") {
        document.getElementById(inputId).value = userData.userEmail
    }
    if (inputValue == "" && inputId == "city") {
        document.getElementById(inputId).value = userData.userLocation
    }
}

function endSession() {
    localStorage.removeItem("userData");
    location.href = ("../index.php");
}

function classActive() {
    var currentPage = location.href.split('/')[location.href.split('/').length - 1];
    if (currentPage == "userPageValidation.php") {
        document.getElementsByTagName("li")[0].className = "active";
    }
    if (currentPage == "userPageInfo.php") {
        document.getElementsByTagName("li")[1].className = "active";
    }
}