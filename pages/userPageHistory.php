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
                                    <a data-toggle="tab" href="#stats" title="Progresso">
                                        <span class="round-tabs four">
                                            <i class="glyphicon glyphicon-stats">
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
                                    Como agradecimento preparamos várias surpresas, é só ir doar ou indicar um amigo para doação e vir receber. Vai passando para saber mais :D
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
                                   Poxa, você ainda não doou :(.. Vai lá, tem alguém precisando muito! Depois é só voltar para receber seu super presente de agradecimento.
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
                                    <img src="../img/userPageHistory/azure.png" alt="Microsoft Azure" class="img-rounded" width="140" height="140">
                                     <img src="../img/userPageHistory/leitura.png" alt="Livraria Leitura" class="img-rounded" width="140" height="140">
                                    <img src="../img/userPageHistory/subway.png" alt="Subway" class="img-rounded" width="140" height="140">
                                    <img src="../img/userPageHistory/amazon.png" alt="Amazon Store" class="img-rounded" width="140" height="140">
                                    <img src="../img/userPageHistory/nerdstore.png" alt="NerdStore" class="img-rounded" width="140" height="140">
                                  </div>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="stats">
                                <h3 class="head text-center">
                                     A <strong>Donaction</strong> valoriza seu altruísmo
                                </h3>
                                <p class="narrow text-center">
                                    E para te mostrar isso nós reunimos uma galera que também pensa assim para disponibilizar umas coisas legais a medida que você aparece mais por aqui
                                </p>
                                <p class="text-center">
                                    <!-- Funcionalidadae aqui -->
                                </p>
                            </div>
                            <div class="tab-pane fade" id="doner">
                                <div class="text-center">
                                    <i class="img-intro icon-checkmark-circle">
                                    </i>
                                </div>
                                <h3 class="head text-center">
                                    Mandou Bem!
                                </h3>
                                <p class="narrow text-center">
                                    Com a sua ajuda vidas foram salvas, 
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