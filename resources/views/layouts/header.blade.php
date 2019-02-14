<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Corporacion Home Peru S.A.C">

    <title>weCan | Juntos podemos</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('images\favicon.ico')}}">

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images\apple-touch-icon-114x114-precomposed.png')}}">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images\apple-touch-icon-72x72-precomposed.png')}}">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('images\apple-touch-icon-57x57-precomposed.png')}}">

    <!-- Library - Loader CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries\loader\loaders.min.css')}}">

    <!-- Library - Google Font Familys -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries\bootstrap\bootstrap.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('libraries\fonts\font-awesome.min.css')}}">

    <!-- Library - OWL Carousel V.2.0 beta -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries\owl-carousel\owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('libraries\owl-carousel\owl.theme.css')}}">

    <!-- Library - Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries\animate\animate.min.css')}}">

    <!-- Library - Price Filter -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries\price-filter\jquery-ui.min.css')}}">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css\plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css\navigation-menu.css')}}">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css\shortcodes.css')}}">

    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->

<a id="top"></a>
<!-- Main Container -->
<div class="main-container">
    <!-- Header -->
    <header class="header-main">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <div class="col-md-4 col-sm-4 col-xs-4 no-padding color-red"></div>
            <div class="col-md-4 col-sm-4 col-xs-4 no-padding color-green"></div>
            <div class="col-md-4 col-sm-4 col-xs-4 no-padding color-yellow"></div>
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <p>Envianos tus consultas a: <a href="mailto:ventas@wecan.com.pe">ventas@wecan.com.pe</a></p>
                    </div>
                    <div class="social col-md-4 col-sm-4 col-xs-6 pull-right">
                        <ul class="no-bottom-margin">

                            <li><a href="#"><img src="{{asset('images\icon\fb-ic.png')}}" alt="Facebook"></a></li>

                            <li><a href="#"><img src="{{asset('images\icon\ins-ic.png')}}" alt="Instagram"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- container /- -->
        </div><!-- Top Header /- -->

        <!-- Logo Block -->
        <div class="middle-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-block pull-left">
                        <a href="#">
                            <img src="{{asset('images\logo.png')}}" alt="Logo">
                        </a>
                    </div>
                    <div class="col-md-9 pull-right">

                        <div class="time-scheduled">
                            <img src="{{asset('images\icon\time-ic.png')}}" alt="time">
                            <p><span>Lun - Sab</span> 10 am - 6 pm</p>
                        </div>
                        <div class="phone">
                            <img src="{{asset('images\icon\phone-ic.png')}}" alt="phone">
                            <p><span>Pedidos :</span>  (01) 990 994 142</p>
                        </div>
                        <div class="cart">
                            <a href="#"><img src="{{asset('images\icon\cart-ic.png')}}" alt="png"><span> 0</span></a>
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Logo Block /- -->
        <nav class="navbar ow-navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand logo-block">
                            <a href="#">
                                <img src="{{asset('images\logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href={{ url('/ ') }}>Inicio</a></li>
                            <li><a href={{ url('/nosotros') }}>Nosotros</a></li>
                            <li><a href={{ url('/galeria') }}>Galeria</a></li>

                            <li><a href={{ url('/gracias-a-ti') }}>Gracias a ti</a></li>
                            <li><a href={{ url('/blog') }}>Blog</a></li>

                            <li><a href={{ url('/contactanos') }}>Contáctanos</a></li>
                        </ul>
                    </div>
                    <a href="{{ url('/tienda') }}">Compra weCan!</a>
                </div>
            </div>
        </nav>
    </header><!-- Header /- -->