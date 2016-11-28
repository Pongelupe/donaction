function userSession() {
    document.getElementsByTagName("li")[3].className = "active";
    var userData = JSON.parse(localStorage.getItem("userData"));
    var userLocation = userData.userLocation;
    hospitalText(userLocation);
    displayHospitals(userLocation);
    var bol = userData.canDonate;
    if (bol == false || bol == undefined) {
        document.getElementById("donate").style.display = "none";
        if (bol == false) {
            document.getElementById("hospital").style.display = "none";
        }
    } else {
        document.getElementById("hospital").style.display = "none";
    }
}

function displayHospitals(userLocation) {
    if (userLocation == "Viridiano") {
        for (i = 0; i < 5; i++) {
            document.getElementsByTagName("figure")[i].style.display = "none";
        }
        document.getElementById("Viridiano").className = "col-lg-12 col-centered";
    }
    if (userLocation == "Belo Horizonte") {
        for (i = 2; i < 6; i++) {
            document.getElementsByTagName("figure")[i].style.display = "none";
        }
        document.getElementsByName("beloHorizonte")[0].className = "col-lg-6";
        document.getElementsByName("beloHorizonte")[1].className = "col-lg-6";
    }
    if (userLocation == "São Paulo") {
        document.getElementsByTagName("figure")[0].style.display = "none";
        document.getElementsByTagName("figure")[1].style.display = "none";
        document.getElementsByTagName("figure")[4].style.display = "none";
        document.getElementsByTagName("figure")[5].style.display = "none";
        document.getElementsByName("saoPaulo")[0].className = "col-lg-6";
        document.getElementsByName("saoPaulo")[1].className = "col-lg-6";
    }
    if (userLocation == "Jacksonville Capital") {
        document.getElementsByTagName("figure")[0].style.display = "none";
        document.getElementsByTagName("figure")[1].style.display = "none";
        document.getElementsByTagName("figure")[2].style.display = "none";
        document.getElementsByTagName("figure")[3].style.display = "none";
        document.getElementsByTagName("figure")[5].style.display = "none";
    }
}

function hospitalText(userLocation) {
    if (userLocation != "Jacksonville Capital") {
        document.getElementById("cityHospitals").innerHTML = "Hospitais em " + userLocation;
    } else {
        document.getElementById("cityHospitals").innerHTML = "Hospital em " + userLocation;
    }
}
function endSession() {
    localStorage.removeItem("userData");
    location.href = ("../index.php");
}