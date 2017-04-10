<!DOCTYPE html>
<html>
  <head>
    <title>
      Sessão de Usuário
    </title>
    <meta charset="utf-8"/>

    <!-- CSS's imports -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/userPage.css" rel="stylesheet" />
    <link href="../css/navBar.css" rel="stylesheet" type="text/css" />
    <link href="../css/datePicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../vendor/sweetalert/css/sweetalert.css">
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
        <div id="voucher" class="row row-centered">
          <div class="col-lg-12 col-centered">
            <form class="form-inline">
              <label for="date">Data:</label>
              <div class='input-group date' id='dataVoucher'>
                    <input data-format="dd-MM-yyyy hh:mm:ss" type='text' class="form-control" placeholder="dd-MM-yyyy hh:mm" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              <div class="form-group">
                <label for="código do voucher">Código:</label>
                <input type="Código" class="form-control" id="inputCodigo" placeholder="XXXX-XXX-XX">
              </div>
              <div>
                <buttom class="btn btn-default" onclick="validarVoucher()" type="button">Validar!</buttom>
              </div>
            </form>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

<!-- JavaScript's Files -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/sweetalert/js/sweetalert.min.js"></script>
<script src="../js/userUpdate.js"></script>
<script src="../js/userPageValidation.js"></script>
<script src="../js/moment.js"></script>
<script src="../js/userPageSideBar.js"></script>
<script src="../js/datePicker.js"></script>
<script type="text/javascript">

            $(function () {
              $('#dataVoucher').datetimepicker({
                locale:'pt-BR'
              });
              $('#dataVoucher').datetimepicker();
            });
            $('#dataVoucher').data('date');
        </script>

<!-- Include of the navBar -->
<?php include 'userPageSideBar.php';?>
