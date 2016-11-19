<!DOCTYPE html>
<html>

<head>
    <title>Informação do Receptor</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../css/receptorForm.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" type="text/css" href="../css/receptorInfo.css">

</head>

<body onload="userSession()">

<div class="container-fluid">
     <form class="register-form"> 
      
      <div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
              <picture>
                  <img src="../img/custom/Woz.png" class="img-circle" height="180" width="180">
              </picture>    
           </div>            
      </div> 

      <div class="row">      
           <div class="col-md-12 col-sm-12 col-lg-12 col-md-offset-2 col-sm-offset-2 col-lg-offset-2">
              <div id="userName" class="userName">Olá, Usuário</div>  
           </div>            
      </div>

      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="email">EMAIL</label>
               <input name="email" class="form-control" type="text" id="email" onclick="clearField(this.id)" required>             
           </div>            
      </div>

      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="phone">TELEFONE</label>
               <input name="phone" class="form-control" type="text" id="phone" onclick="clearField(this.id)" required>             
           </div>            
      </div>

      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="city">CIDADE</label>
               <input name="city" class="form-control" type="text" id="city" onclick="clearField(this.id)" required>             
           </div>            
      </div>

      <hr>
      <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <button class="btn btn-default regbutton" onclick="history.go(-1)">Cancelar</button>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <button class="btn btn-default logbutton" onclick="updateData()">Alterar</button>           
            </div>          
      </div>    
    </form>
</div>

<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App JavaScript -->
    <script src="../js/userUpdate.js"></script>

</body>
</html>


