<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bloody PUT</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Modal CSS -->
    <link href="css/modalLogin.css" rel="stylesheet">

    <!-- Sweet Alert CSS -->
    <link href="vendor/sweetalert/css/sweetalert.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

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
                <a class="navbar-brand page-scroll" href="#page-top">Bloody Put</a>
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
                        <a class="page-scroll" href="#about">História</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Time</a>
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
                <button type="button" class="btn btn-xl" data-toggle="modal" data-target="#inputModal">Cadastrar</button>
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
                    <h4 class="service-heading">Cadastro</h4>
                    <p class="text-muted">O primeiro passo é realizar o cadastro no site como doador ou receptor, lembrando que é importante responder corretamente e lembrar dos seus dados.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Onde há urgência?</h4>
                    <p class="text-muted">Depois nós vamos usar nossos poderes matemágicos para encontrar pessoas com o mesmo tipo sanguíneo perto de você e te avisaremos.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-hospital-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Menos Burocracia</h4>
                    <p class="text-muted">Pronto! Agora só falta ir no posto de coleta combinado para trabalhar os detalhes, marcar a coleta ou a transfusão e levar uma vida saudável.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Hospitais Parceiros</h2>
                    <h3 class="section-subheading text-muted">Esses hospitais abriram as portas para a Bloody PUT!</h3>
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
                        <img src="img/newHospitals/hospital1.jpg" class="img-responsive" alt="Inverno Cruz">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Inverno Cruz</h4>
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
                        <img src="img/newHospitals/hospital2.jpg" class="img-responsive" alt="Felício Vermelho">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Felício Vermelho</h4>
                        <p class="text-muted">Belo Horizonte</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/newHospitals/hospital3.jpg"  class="img-responsive" alt="Salvação de Jesus">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Salvação de Jesus</h4>
                        <p class="text-muted">São Paulo</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/newHospitals/hospital4.jpg" class="img-responsive" alt="Serio Dinamarquês">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Serio Dinamarquês</h4>
                        <p class="text-muted">São Paulo</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/newHospitals/hospital5.jpg" class="img-responsive" alt="JC's City Hospital">
                    </a>
                    <div class="portfolio-caption">
                        <h4>JC's City Hospital</h4>
                        <p class="text-muted">Jacksonville Capital, EUA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/newHospitals/hospital6.jpg" class="img-responsive" alt="Viridiano's Pokecenter">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Viridiano's Pokecenter</h4>
                        <p class="text-muted">Viridiano, Japão</p>
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
                    <h2 class="section-heading">História</h2>
                    <h3 class="section-subheading text-muted"></h3>
                    <h2 class="section-subheading">2016</h2>
                    </br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/stackOverflow.png" alt="Engenharia de Software">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Agosto</h4>
                                    <h5 class="subheading">Engenharia de Software</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">A jornada começa na graduação da PUC Minas.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/studentBussiness.png" alt="S2B">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Outubro</h4>
                                    <h5 class="subheading">Introdução ao S2B</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Continua em 27 de outubro com a apresentação do programa <strong>Student to Bussiness</strong> e suas oportunidades.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/html5.png" alt="Desenvolvimento Web">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Novembro</h4>
                                    <h5 class="subheading">Trilha de desenvolvimento Web</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Foram ministradas aulas de HTML 5, CSS e JavaScript pelo professor Guilherme Rodrigues.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/bloody_put1.png" alt="Bloody PUT">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>14/novembro à 26/novembro</h4>
                                    <h5 class="subheading">Desenvolvimento do projeto</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> O projeto Bloody PUT foi desenvolvido utilizando a API do <strong>Myjson</strong>, HTML 5, CSS e Java Script em conjunto com os frameworks Bootstrap e Sweet Alert.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Agora
                                    <br>é com
                                    <br>vocês...</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Desenvolvedores</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Eric Ribeiro</h4>
                        <p class="text-muted">Desenvolvedor</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-telegram"></i></a>
                            </li>
                            <li><a href="https://github.com/EricRibeiro "><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Pedro Pongelupe</h4>
                        <p class="text-muted">Desenvolvedor</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/Pongelupe"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Agradeçemos aos envolvidos, à PUC Minas, à Microsoft, à TOTVS, ao Guilherme e Ednaldo Pereira.</p>
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
                        <img src="img/logos/puc_logo.jpg" class="img-responsive img-centered" alt="PUC Minas">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img src="img/logos/microsoft_logo.png" class="img-responsive img-centered" alt="Microsoft">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img src="img/logos/totvs_logo.png" class="img-responsive img-centered" alt="TOTVS">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <footer class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Input's Modal -->
    <?php include 'pages/inputModal.php';?>

    <!-- Partner's Modal-->
    <?php include 'pages/indexModal.php';?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    
    <!-- User Login JavaScript -->
    <script src="js/userLogin.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <!-- Sweet Alert JavaScript -->
    <script src="vendor/sweetalert/js/sweetalert.min.js"></script>

</body>

</html>
