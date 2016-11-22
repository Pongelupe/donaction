<!DOCTYPE html>
<html>

<head>
    <title>Sessão de Usuário</title>
    <meta charset="utf-8">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../css/receptorForm.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" type="text/css" href="../css/receptorInfo.css">

    <!-- Nav Bar's CSS-->
    <link rel="stylesheet" type="text/css" href="../css/navBar.css">

</head>

<body onload="userFirstSession()">


<div class="container-fluid">
     <form class="register-form"> 
      
      <div class="row row-centered">      
           <div class="col-lg-12 col-centered">
              <picture>
                  <img src="../img/custom/Woz.png" id="userAvatar" class="img-circle" height="180" width="180">
              </picture>    
           </div>            
      </div> 

      <div class="row row-centered">      
           <div class="col-lg-12 col-centered">
              <div id="userName" class="userName">Usuário</div>  
           </div>            
      </div>

      <div class="row row-centered">
        <div class="col-lg-12 col-centered">
          <div id="userBlood" class="userBlood">Tipo Sanguíneo</div>
        </div>
      </div>
</div>
</form>

<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App JavaScript -->
    <script src="../js/userUpdate.js"></script>

    <!-- Nav Bar's js-->
    <script src="../js/navBar.js"></script>

<!-- Include of the navBar -->
 <?php include 'navBar.php'; ?> 
</body>
</html>