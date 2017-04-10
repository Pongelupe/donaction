<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Donaction</title>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- CSS's files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"">
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/modalLogin.css" rel="stylesheet">
    <link href="vendor/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="css/indexPage.css" rel="stylesheet">

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navegador</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Donaction</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Parceiros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Valide seu Voucher</a>
                    </li>
                    <li>
                        <!-- Include of the modal -->
                        <?php include 'pages/modalLogin.php'; ?> 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Doe Sangue</div>
                <div class="intro-heading">Você Pode Salvar Vidas</div>
                <button type="button" class="btn btn-xl" onclick="location.href = 'pages/userPageLogOn.html';">Cadastrar</button>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Como você pode ajudar</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Participar da campanha</h4>
                    <p class="text-muted">O primeiro passo é participar das campanhas de doação que a Donaction oferece para incentivar o bem!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-ok fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Retirar o voucher</h4>
                    <p class="text-muted">Depois de doar é só pegar o código que o centro de coleta te dará e seguir os passos aqui embaixo.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-heart-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Indicar os amigos</h4>
                    <p class="text-muted">Pronto! Se você gostou de ajudar os outros indique seus amigos para continuar a espalhar e fortalecer esta corrente do bem!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Empresas Parceiras</h2>
                    <h3 class="section-subheading text-muted">Essas empresas abriram as portas para a Donaction!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/indexPage/pucminas.jpg" class="img-responsive" alt="Pucminas">
                    </a>
                    <div class="portfolio-caption">
                        <h4>PUC Minas</h4>
                        <p class="text-muted">Belo Horizonte</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/indexPage/microsoft.jpg" class="img-responsive" alt="Microsoft">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Microsoft</h4>
                        <p class="text-muted">Redmond, Washington, EUA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/indexPage/amazon.jpg"  class="img-responsive" alt="Amazon">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Amazon</h4>
                        <p class="text-muted">Seattle, Washington, EUA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/indexPage/leitura.png" class="img-responsive" alt="Leitura">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Leitura</h4>
                        <p class="text-muted">Belo Horizonte</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/indexPage/subway.jpg" class="img-responsive" alt="Subway">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Subway</h4>
                        <p class="text-muted">Milford, Connecticut, EUA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/indexPage/nerdstore.png" class="img-responsive" alt="Nerdstore">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Nerdstore</h4>
                        <p class="text-muted">Curitiba</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Como validar seu Voucher:</h2>
                    </br>
                    </br>
                    </br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/indexPage/bolinha1.png" alt="B1">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h2>Passo 1:</h2>
                                    </br>
                                    <h4>Pegue o voucher</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">e olhe na parte de baixo dele </br> o código estará aí.</p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/indexPage/bolinha2.png" alt="B2">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h2>Passo 2:</h2>
                                    </br>
                                    <h4>Entre no site</h4>
                                    <h5 class="subheading"></h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">e digite o código do voucher nos campos indicados e pressione "Validar!"</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/indexPage/bolinha3.png" alt="B3">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h2>Passo 3:</h2>
                                    </br>
                                    <h4>agora você pode compartilhar a sua doação!</h4>
                                    <h5 class="subheading">Você será levado para </br> o seu perfil no Facebook </h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">não se preocupe! caso você não queira </br> publicar no seu perfil não publicaremos!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/indexPage/bolinha4.png" alt="B4">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h2>Passo 4:</h2>
                                    </br>
                                    <h4>Pronto!</h4>
                                    <h5 class="subheading">agora você está pronto para desfrutar dos nossos presentes incríveis!</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Um muito obrigado da equipe Donaction por fazer parte desta corrente do bem!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/indexPage/bolinha5.png" alt="B4">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img src="img/indexPage/microsoft_logo.png" class="img-responsive img-centered" alt="Microsoft">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img src="img/indexPage/puc_logo.png" class="img-responsive img-centered" alt="PUC Minas">
                    </a>
                </div>
                <div id="azure_logo" class="col-md-4 col-sm-6">
                    <a href="#">
                        <img src="img/indexPage/azure_logo.png" class="img-responsive img-centered" alt="Azure
                        ">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">Copyright &copy; Donaction 2017</span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Partner's Modal-->
    <?php include 'pages/indexModal.php';?>

    <!-- JavaScript's Files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/userLogin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/agency.min.js"></script>
    <script src="vendor/sweetalert/js/sweetalert.min.js"></script>
</body>

</html>
