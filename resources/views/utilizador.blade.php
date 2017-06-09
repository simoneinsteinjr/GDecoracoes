<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Ecommerce/home-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 12:32:11 GMT -->
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gina Decorações</title>

    <!-- Meta OG -->
    <meta property="og:title" content="Premium Ecommerce Home Page Template">
    <meta property="og:description" content="Exclusive in its design, our premium ecommerce home page template agregates all your latest news and valuable informations.">
    <meta property="og:image" content="../../../../img/Live/MDB/ecommerce.jpg">
    <meta property="og:url" content="home-page.html">
    <meta property="og:site_name" content="mdbootstrap.com">
    <!-- /Meta OG -->

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Exclusive in its design, our premium ecommerce home page template agregates all your latest news and valuable informations." />
    <meta name="twitter:title" content="Premium Ecommerce Home Page Template" />
    <meta name="twitter:site" content="@MDBootstrap" />
    <meta name="twitter:image" content="../../../../img/Live/MDB/ecommerce.jpg" />
    <meta name="twitter:creator" content="@MDBootstrap" />
    <!-- /Twitter Card -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Customizer -->
    <link rel="stylesheet" href="css/customizer.min.css">

</head>

<body class="hidden-sn pink-skin animated">

<header>

    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="/" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <ol class="breadcrumb header-breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Quem Somos</a></li>
                <li class="breadcrumb-item"><a href="#">Serviços</a></li>
            </ol>
        </div>

        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <li class="nav-item">
            <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contacto</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route('login')}}" class="nav-link active"><i class="fa fa-login"></i> <span class="hidden-sm-down">Login</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link"><i class="fa fa-login"></i> <span class="hidden-sm-down">Criar Conta</span></a>
            </li>

        </ul>

    </nav>
    <!-- /.Navbar -->

</header>

        <br>
        <br>
        <br>
        <div class="login">
            @yield('content')
        </div>




<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>
    // Data Picker Initialization
    $('.datepicker').pickadate();
</script>

<!-- Customizer -->
<script type="text/javascript" src="js/customizer.min.js"></script>

<script>
    // SideNav init
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    new WOW().init();

    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
        $('#toggle').tooltip('show')
    })
</script>

</body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Ecommerce/home-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 12:36:26 GMT -->
</html>