var canDonate = ["", "", "", ""];
var isChecked = [];

function userInput() {
    var isValid = validateForm();
    var bloodValid = bloodCheck();
    var emailValid = checkEmail();
    checkBox();
    if (isValid == false) {
        swal('Campo em Branco', 'Todos os campos são obrigatórios', 'error')
        event.preventDefault();
    } else if (bloodValid == false) {
        swal('Tipo Sanguíneo', 'Selecione seu tipo sanguíneo para prosseguir', 'error')
        event.preventDefault();
    } else if (emailValid == false) {
        swal('Confirme seu Email', 'Os emails inseridos não são iguais', 'error')
        event.preventDefault();
    } else if (isChecked[0] == false || isChecked[1] == false || isChecked[2] == false || isChecked[3] == false) {
        event.preventDefault();
    } else {
        var userName = document.getElementById('name').value;
        var userEmail = document.getElementById('email').value;
        var userPhone = document.getElementById('phone').value;
        var userLocation = document.getElementById('location').value;
        var userBlood = document.getElementById('bloody').value;
        var userDonator = toDonate();
        // Array's declaration and values assignement
        var userData = {};
        userData.id = "";
        userData.userName = userName;
        userData.userEmail = userEmail;
        userData.userPhone = userPhone;
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

function checkbox_config(x, y) {
    canDonate[y] = x;
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
    if (document.getElementsByTagName("input")[0].value == "" || document.getElementsByTagName("input")[1].value == "" || document.getElementsByTagName("input")[2].value == "" || document.getElementsByTagName("input")[3].value == "" || document.getElementsByTagName("input")[4].value == "") {
        return false;
    } else {
        return true;
    }
}

function bloodCheck() {
    if (document.getElementById("bloody").value == "Tipo Sanguíneo") {
        return false;
    } else {
        return true;
    }
}

function checkEmail() {
    if (document.getElementById('email').value == document.getElementById('emailConfirm').value) {
        return true;
    } else {
        return false;
    }
}

function checkBox() {
    if (document.getElementsByName("checkbox")["6"].checked == false && document.getElementsByName("checkbox")["7"].checked == false) {
        swal('Tatuagem nos últimos meses?', 'Responda o questionário para continuar', 'error')
        isChecked[3] = false;
    } else if (document.getElementsByName("checkbox")["6"].checked == true && document.getElementsByName("checkbox")["7"].checked == true) {
        swal('Tatuagem nos últimos meses?', 'Selecione somente uma opção', 'error')
        isChecked[3] = false;
    } else {
        isChecked[3] = true;
    }
    if (document.getElementsByName("checkbox")["4"].checked == false && document.getElementsByName("checkbox")["5"].checked == false) {
        swal('Faz uso de drogas injetáveis?', 'Responda o questionário para continuar', 'error')
        isChecked[2] = false;
    } else if (document.getElementsByName("checkbox")["4"].checked == true && document.getElementsByName("checkbox")["5"].checked == true) {
        swal('Faz uso de drogas injetáveis?', 'Selecione somente uma opção', 'error')
        isChecked[2] = false;
    } else {
        isChecked[2] = true;
    }
    if (document.getElementsByName("checkbox")["2"].checked == false && document.getElementsByName("checkbox")["3"].checked == false) {
        swal('Já teve malária?', 'Responda o questionário para continuar', 'error');
        isChecked[1] = false;
    } else if (document.getElementsByName("checkbox")["2"].checked == true && document.getElementsByName("checkbox")["3"].checked == true) {
        swal('Já teve malária?', 'Selecione somente uma opção', 'error')
        isChecked[1] = false;
    } else {
        isChecked[1] = true;
    }
    if (document.getElementsByName("checkbox")["0"].checked == false && document.getElementsByName("checkbox")["1"].checked == false) {
        swal('Tem, no mínimo, 50Kg?', 'Responda o questionário para continuar', 'error');
        isChecked[0] = false;
    } else if (document.getElementsByName("checkbox")["0"].checked == true && document.getElementsByName("checkbox")["1"].checked == true) {
        swal('Tem, no mínimo, 50Kg?', 'Selecione somente uma opção', 'error')
        isChecked[0] = false;
    } else {
        isChecked[0] = true;
    }
}