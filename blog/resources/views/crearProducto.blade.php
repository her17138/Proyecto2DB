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

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            #titulo{
                font-family: 'Anton', sans-serif;
                
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

        </style>
    </head>
    <body>
        
        <div class="container-contact100">
       
            <div class="content">
                
                <div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Creación de tienda
				</span>

				<div class="wrap-input100 validate-input" data-validate="Porfavor ingrese el nombre de la tienda">
					<input class="input100" type="text" name="id" placeholder="Nombre del producto">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Ingrese sus productos separados por comas">
					<textarea class="input100" name="nombre" placeholder="Atributos del producto (separadas por coma)"></textarea>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Ingrese sus productos separados por comas">
					<textarea class="input100" name="tiendaid" placeholder="Categorías (separadas por coma)"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<a type="submit" class="contact100-form-btn" >
						Siguiente
					</a>
				</div>
			</form>-->
            <form method="post" action="{{ route('producto.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="id">Id del producto:</label>
                    <input type="text" class="form-control" name="id"/>
                </div>
                <div class="form-group">
                    <label for="name"> Nombre del producto :</label>
                    <input type="text" class="form-control" name="nombre"/>
                </div>
                <div class="form-group">
                    <label for="storeid">Id de la tienda:</label>
                    <input type="text" class="form-control" name="tiendaid"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>


            </div>
        </div>
        </div>
    </body>
</html>
