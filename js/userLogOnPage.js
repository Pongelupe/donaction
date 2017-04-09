var canDonate = ["", "", "", ""];

function userInput() {
        var userName = document.getElementById('name').value;
        var userEmail = document.getElementById('email').value;
        var userLocation = document.getElementById('city').value;
        var userBlood = document.getElementById('bloody').value;
        var userDonator = toDonate();
        if(!validateForm()){
            sweetAlert("Formulário inválido!", "Preencha todos os campos!", "error");
        }
        else{
        // Array's declaration and values assignement
        var userData = {};
        userData.id = "";
        userData.userName = userName;
        userData.userEmail = userEmail;
        userData.userLocation = userLocation;
        userData.userBlood = userBlood;
        userData.canDonate = userDonator;
        var sendData = JSON.stringify(userData);
        $.ajax({
            url: "https://api.myjson.com/bins",
            type: "POST",
            data: sendData,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data, textStatus, jqXHR) {
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
                }, function() {
                    location.href = "../index.php"
                })
            }
        });
    }
}
// Function to break the URI and get the ID
function breakUri(userUri) {
    var splittedURL = userUri.split(/\/+/g);
    var userId = splittedURL[splittedURL.length - 1];
    return userId
}
//Function to update the object with the user's ID
function pushId(userData, userId) {
    userData.id = userId;
    sendData = JSON.stringify(userData);
    $.ajax({
        url: "https://api.myjson.com/bins/" + userId,
        type: "PUT",
        data: sendData,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
    });
}

function checkbox_config(status, posicao, clicado) {
    var a = posicao*2;
    alterCheckbox(a,a+1,clicado);
    canDonate[posicao] = status;
}

function alterCheckbox(a,b,clicado){
    if (clicado % 2 == 0){
        document.getElementsByName("checkbox")[b].checked = false;
    } else{
        document.getElementsByName("checkbox")[a].checked = false;
    }
}

function toDonate() {
    var result = true;
    for (var i = 0; i < canDonate.length; i++) {
        if (canDonate[i] == false) {
            result = false;
        }
    }
    return result;
}
//Functions to valdiate the form
function validateForm() {
    if (document.getElementsByTagName("input")[0].value == "" || document.getElementsByTagName("input")[1].value == "" || document.getElementsByTagName("input")[2].value == "" || document.getElementById('bloody').value =='Tipo Sanguíneo' || !validateCheckBox(7)) {
        return false;
    } else {
        return true;
    }
}

function validateCheckBox(numeroDeCheckBox) {
    for (var i = numeroDeCheckBox; i > 0; i =- 2) {
        if (document.getElementsByName("checkbox")[i].checked == false && document.getElementsByName("checkbox")[(i-1)].checked == false){
            return false
        }
    }
    return true;
}

