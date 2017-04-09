<!DOCTYPE html>
<html>
    <head>
        <title>
            Sessão de Usuário
        </title>
        <meta charset="utf-8"/>
        <!-- System's CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="../css/userPage.css" rel="stylesheet"/>
        <link href="../css/navBar.css" rel="stylesheet"/>
        <link href="../vendor/sweetalert/css/sweetalert.css" rel="stylesheet"/>
        <link href="../css/userPageHistory.css" rel="stylesheet"/>
    </head>
    <body onload="userSession()">
        <!-- Include of the navBar -->
        <?php include 'userPageSideBar.php';?>
        <section style="background:#efefe9;">
            <div class="container">
                <div class="row">
                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner">
                                </div>
                                <li class="active">
                                    <a data-toggle="tab" href="#home" title="Começo">
                                        <span class="round-tabs one">
                                            <i class="glyphicon glyphicon-home">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#donations" title="Doações">
                                        <span class="round-tabs two">
                                            <i class="glyphicon glyphicon-heart">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#gifts" title="Presentes">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-gift">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#rewards" title="Recompensas">
                                        <span class="round-tabs four">
                                            <i class="glyphicon glyphicon-bitcoin">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#doner" title="completed">
                                        <span class="round-tabs five">
                                            <i class="glyphicon glyphicon-ok">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <h3 class="head text-center">
                                    Você é <strong>MUITO</strong> importante!
                                    <span style="color:#f48260;">
                                        ♥
                                    </span>
                                </h3>
                                <p class="narrow text-center">
                                    Como um agradecimento preparamos várias surpresas, é só ir doar ou indicar um amigo para doação e vir receber. Vai passando para saber mais :D
                                </p>
                                <p class="text-center">
                                    <a class="btn btn-success btn-outline-rounded green" href="http://localhost/donaction/pages/userPageHistory.php#profile">
                                        start using bootsnipp
                                        <span class="glyphicon glyphicon-send" style="margin-left:10px;">
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="donations">
                                <h3 class="head text-center">
                                   Essas aqui são as suas doações
                                </h3>
                                <p class="narrow text-center">
                                   Poxa, você ainda não doou :(.. Vai lá, tem alguém precisando muito! Depois é só voltar pra receber seu super presente de agradecimento.
                                </p>
                                <p class="text-center">
                                    <a class="btn btn-success btn-outline-rounded green" href="">
                                        create your profile
                                        <span class="glyphicon glyphicon-send" style="margin-left:10px;">
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="gifts">
                                <h3 class="head text-center">
                                    Recompensas dos nossos <strong>super parceiros</strong>
                                </h3>
                                <p class="narrow text-center">
                             <div class="container">
                                  <div class="row">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="..." class="img-rounded">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="..." class="img-rounded">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="..." class="img-rounded">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="..." class="img-rounded">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="..." class="img-rounded">
                                  </div>
                                </div>
                                </p>
                                <p class="text-center">
                                    <a class="btn btn-success btn-outline-rounded green" href="">
                                        start using bootsnipp
                                        <span class="glyphicon glyphicon-send" style="margin-left:10px;">
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="rewards">
                                <h3 class="head text-center">
                                     A <strong>Donaction</strong> valoriza seu altruísmo
                                </h3>
                                <p class="narrow text-center">
                                    E para te mostrar isso nós reunimos uma galera que também pensa assim para disponibilizar umas coisas legais a medida que você aparece mais por aqui
                                </p>
                                <p class="text-center">
                                    <a class="btn btn-success btn-outline-rounded green" href="">
                                        start using bootsnipp
                                        <span class="glyphicon glyphicon-send" style="margin-left:10px;">
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="doner">
                                <div class="text-center">
                                    <i class="img-intro icon-checkmark-circle">
                                    </i>
                                </div>
                                <h3 class="head text-center">
                                    thanks for staying tuned!
                                    <span style="color:#f48260;">
                                        ♥
                                    </span>
                                    Bootstrap
                                </h3>
                                <p class="narrow text-center">
                                    Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                </p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript's files -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/userPageSideBar.js"></script>
        <script src="../vendor/sweetalert/js/sweetalert.min.js"></script>
        <script src="../js/userPageHistory.js"></script>
    </body>
</html>