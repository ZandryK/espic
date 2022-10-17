<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>ESPIC</title>
</head>
<style>
    html,body{
        width: 100%;
        height: 100%;
    }
</style>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand">ESC&ESPIC</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">Deconnexion</a>
                </li>
            </ul>
        </nav>
        <div class="container d-flex flex-column justify-content-center align-items-center h-100">
            <div class="card w-50" style="min-width: 300px;">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" class="card-img-top">
                <div class="card-body d-flex flex-column justify-content-center align-items-center ">
                    <h2>Votre compte est désactivée</h2>
                    <p>Merci de contacter votre administrateur pour l'activé</p>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>