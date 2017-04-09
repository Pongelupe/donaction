<!DOCTYPE html>
<html>
  <head>
    <title>
      Sessão de Usuário
    </title>
    <meta charset="utf-8"/>

    <!-- CSS's imports -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/receptorForm.css" rel="stylesheet" />
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/userPage.css" rel="stylesheet" />
    <link href="../css/navBar.css" rel="stylesheet" type="text/css" />
    <link href="../css/userPageTable.css" rel="stylesheet" type="text/css" />

  </head>

  <body onload="userFirstSession()">
    <div class="container-fluid">
      <form class="register-form">
        <div class="row row-centered">
          <div class="col-lg-12 col-centered">
            <picture>
              <img class="img-circle" height="180" id="userAvatar" src="../img/custom/Woz.png" width="180">
              </img>
            </picture>
          </div>
        </div>
        <div class="row row-centered">
          <div class="col-lg-12 col-centered">
            <div class="userName" id="userName">
              Usuário
            </div>
          </div>
        </div>
        <div class="row row-centered">
          <div class="col-lg-12 col-centered">
            <div class="userBlood" id="userBlood">
              Tipo Sanguíneo
            </div>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>

<!-- JavaScript's Files -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/userUpdate.js"></script>
<script src="../js/userPageSideBar.js"></script>

<!-- Include of the navBar -->
<?php include 'userPageSideBar.php'; ?>
