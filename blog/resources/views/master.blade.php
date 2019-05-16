<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creacion de tiendas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet"> 
        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/icofont.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


        <!-- Styles -->
        <style>
          
            .form-control {
                border-radius: 100px;
            }

            body {
            font-family: 'lato', sans-serif;
        }
      

        h2 {
            font-size: 26px;
            margin: 20px 0;
            text-align: center;
            small {
                font-size: 0.5em;
            }
        }

        
        .table-header {
            background-color: #95A5A6;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .table-row {
            background-color: #ffffff;
            box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
        }
        .col-1 {
            width: 100%; 
            flex-basis: 10%;
        }
        .col-2 {
            width: 100%; 
            flex-basis: 40%;
        }
        .col-3 {
            width: 100%; 
            flex-basis: 25%;
        }
        .col-4 {
            width: 100%; 
            flex-basis: 25%;
        }
        
            
        @media all and (max-width: 767px) {
            .table-header {
            display: none;
            }
            .table-row{
            
            }
            li {
            display: block;
            }
            .col {
            
            flex-basis: 100%;
            
            }
            .col {
            display: flex;
            padding: 10px 0;
            &:before {
                color: #6C7A89;
                padding-right: 10px;
                content: attr(data-label);
                flex-basis: 50%;
                text-align: right;
            }
            }
            }
            

           
        </style>
        <!--                Javascript                  -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/funciones.js') }}"></script>
    </head>
    <div id="preloader">
            <div id="preloader_spinner">
				<div class="pre_inner">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
            </div>
        </div>
       
        <!--================Header Area =================-->
        <header class="dash_tp_menu_area">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/factura">Facturar</a></li>
                        <li><a href="/verProducto">Ver productos</a></li>
                        <li><a href="/verClientes">Ver clientes</a></li>
                        <li><a href="/producto">Ingresar producto</a></li>
                        <li class="active"><a href="/configurarTienda">Configurar Productos</a></li>
                        <li><a href="/cliente">Agregar clientes</a></li>
                        <li><a href="/verFactura">Ver facturas</a></li>
                        <li><a href="/fill">Simular ventas</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="get_free_btn btn-xs"><a href="https://github.com/her17138/Proyecto2DB/tree/Lulu">Github</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>
        <!--================End Header Area =================-->
    <body style="padding-top: 60px;">
        <div class="container-contact100 ">
            
                <div class="wrap-contact100">
                    @yield('body')
                </div>
            
        </div>
    </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <!-- Extra Plugin -->
    <script src="vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/counterup/waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/flexslider/flex-slider.js"></script>
    <script src="vendors/flexslider/mixitup.js"></script>
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/flipster-slider/jquery.flipster.min.js"></script>
    <script src="vendors/nice-selector/jquery.nice-select.min.js"></script>
    
    <script src="js/theme.js"></script>
</html>