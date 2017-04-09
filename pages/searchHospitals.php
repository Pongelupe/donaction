<!DOCTYPE html>
<html>
    <head>
        <title>
            Sessão de Usuário
        </title>
        <meta charset="utf-8"/>
        <!-- System's CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/userPage.css" rel="stylesheet" type="text/css"/>
        <link href="../css/navBar.css" rel="stylesheet" type="text/css"/>
        <link href="../css/searchHospitals.css" rel="stylesheet" type="text/css"/>
   
    </head>
</html>
<body onload="userSession()">
    <!-- Include of the navBar -->
    <?php include 'userPageSideBar.php';?>
    <div class="container">
        <p class="text-center" id="cityHospitals">
            Hospitais na Região:
        </p>
        <div class="row row-centered" name="myRow">
            <div class="col-lg-4" id="invernoCruz" name="beloHorizonte">
                <figure>
                    <img alt="Inverno Cruz" height="200" src="../img/newHospitals/hospital1.jpg" width="200"/>
                    <figcaption>
                        Inverno Cruz
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4" id="felicioVermelho" name="beloHorizonte">
                <figure>
                    <img alt="Felício Vermelho" height="200" src="../img/newHospitals/hospital2.jpg" width="200"/>
                    <figcaption>
                        Felício Vermelho
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4" name="saoPaulo">
                <figure>
                    <img alt="Salvação de Jesus" height="200" src="../img/newHospitals/hospital3.jpg" width="200"/>
                    <figcaption>
                        Salvação de Jesus
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4" name="saoPaulo">
                <figure>
                    <img alt="Serio Dinamarquês" height="200" src="../img/newHospitals/hospital4.jpg" width="200"/>
                    <figcaption>
                        Serio Dinamarquês
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4">
                <figure>
                    <img alt="JC's City Hospital" height="200" src="../img/newHospitals/hospital5.jpg" width="200"/>
                    <figcaption>
                        JC's City Hospital
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4" id="Viridiano">
                <figure>
                    <img alt="Viridiano's Pokecenter" height="200" src="../img/newHospitals/hospital6.jpg" width="200"/>
                    <figcaption>
                        Viridiano's Pokecenter
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

    <!-- System's JavaScript -->
    <script src="../vendor/jquery/jquery.min.js">
    </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js">
    </script>
    <script src="../js/userPageSideBar.js">
    </script>
    <script src="../js/searchHospitals.js">
    </script>
    
</body>
