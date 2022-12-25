<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <style>
        body,html {
            font-family: 'Raleway'; font-size: 10px;

        }
        .style-input{
            display: block;
            width: 100%;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #55595c;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            height: calc(3rem + 2px) !important;
            border-radius:0;
        }
        .color-red{
            background-color: #FF0000;
        }
        #div_file{
            cursor: pointer;
        }
        .btn{
            font-weight: bold;
        }
    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="https://www.apuestatotal.com/_next/static/media/logofull.5b236246.png" width="100" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('admin/home')) ? 'active' : '' }}">
                <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item {{ (request()->is('admin/refills')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/refills') }}">Depósitos</a>
            </li>
            <li class="nav-item {{ (request()->is('admin/players')) ? 'active' : '' }}">
                <a class="nav-link" href="#">Jugadores</a>
            </li>
            <li class="nav-item {{ (request()->is('admin/banks')) ? 'active' : '' }}">
                <a class="nav-link" href="#">Metodos de pago</a>
            </li>
            <li class="nav-item {{ (request()->is('admin/canals')) ? 'active' : '' }}">
                <a class="nav-link" href="#">Medios</a>
            </li>
        </ul>
        <span class="navbar-text">
      Navbar text with an inline element
    </span>
    </div>
</nav>
<div class="">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
