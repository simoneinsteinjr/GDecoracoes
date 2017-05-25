
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gina Decorações</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css" rel="stylesheet">

    <style>
        .bg-skin-lp {
            background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="fixed-sn grey-skin bg-skin-lp">
<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">
                <br>
                <br>
            </div>
        </li>
        <!--/. Logo -->
        <li>
            <form class="search-form" role="search">
                <div class="form-group waves-light">
                    <input type="text" class="form-control" placeholder="Pesquisar">
                </div>
            </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-pencil"></i>Adicionar<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="material" class="waves-effect">Material</a></li>
                            <li><a href="tipo" class="waves-effect">Tipo</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-table"></i>Tabelas<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="materiais" class="waves-effect">Material</a></li>
                            <li><a href="tipos" class="waves-effect">Tipos</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-book"></i>Reservas<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Introduction</a>
                            </li>
                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart-o"></i>Estatisticas<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">FAQ</a>
                            </li>
                            <li><a href="#" class="waves-effect">Write a message</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>
    </ul>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-xs-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Gina Decorações</p>
        </div>
        <ul class="nav navbar-nav ml-auto flex-row">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i>
                    Account
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Configurações</a>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->

<!--Main layout-->
<main>
    <div class="container-fluid text-center" style="height: 800px;">

            @yield('content')

    </div>
</main>
<!--/Main layout-->

<!--Footer-->
<footer class="page-footer center-on-small-only">
    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 - Todos os direitos reservados: <a href="#"></a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->



<!-- SCRIPTS -->
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled.min.js"></script>

<script>
    $(".button-collapse").sideNav();

    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
</script>

<script>
    $('.mdb-select').material_select();
</script>

<script type="text/javascript" src="js/jquery.quicksearch.js"></script>

<script type="text/javascript">

    $('#txtpesquisar').quicksearch('#tabela tbody tr');

</script>

</body>

</html>
