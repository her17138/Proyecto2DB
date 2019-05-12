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


        <!-- Styles -->
        <style>
          
            .form-control {
                border-radius: 100px;
            }

            header, nav{
                background-color: transparent !important;
            }
           
        </style>
        <!--                Javascript                  -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/funciones.js') }}"></script>
    </head>
    <header>
        <nav class="navbar navbar-expand-sm   navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="/" style="font-size: 18px;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/configurarTienda" style="font-size: 18px;">Configurar tienda</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/cliente" style="font-size: 18px;">Agregar Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/producto" style="font-size: 18px;">Agregar producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/factura" style="font-size: 18px;">Facturación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/fill" style="font-size: 18px;">Simular dia de ventas</a>
            </li>
            
            </ul>
            <div class="social-part">
                <a class="fa fa-github" href="https://github.com/diazMafer" aria-hidden="true"></a>
            </div>
            </div>
        </nav>
    </header>
    <body >
        <div class="container-contact100 ">
            
                <div class="wrap-contact100">
                    @yield('body')
                </div>
            
        </div>
    </body>
</html>
