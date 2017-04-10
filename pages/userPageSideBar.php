<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#bs-sidebar-navbar-collapse-1" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a class="navbar-brand" href="#" style="color: tomato;">
                Donaction
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="userPageValidation.php">
                        Valide seu Voucher
                        <span class="pull-right hidden-xs showopacity glyphicon glyphicon-tag" style="font-size:16px;">
                        </span>
                    </a>
                </li>
                <li>
                    <a href="userPageInfo.php">
                        Dados de Cadastro
                        <span class="pull-right hidden-xs showopacity glyphicon glyphicon-user" style="font-size:16px;">
                        </span>
                    </a>
                </li>
                <li>
                    <a href="userPageHistory.php">
                        Histórico de Doações
                        <span class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar" style="font-size:16px;">
                        </span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Opções
                        <span class="caret">
                        </span>
                        <span class="pull-right hidden-xs showopacity glyphicon glyphicon-cog" style="font-size:16px;">
                        </span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li>
                            <a href="#">
                                Saiba mais
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Indique um amigo
                            </a>
                        </li>
                    </ul>
                    <li onclick="endSession()">
                        <a href="#">
                            Sair
                            <span class="pull-right hidden-xs showopacity glyphicon glyphicon-off" style="font-size:16px;">
                            </span>
                        </a>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
