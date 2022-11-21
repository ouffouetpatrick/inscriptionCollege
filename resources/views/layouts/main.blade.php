<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Moderne Cocody</title>
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
    @yield('js')
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            padding: 0 10rem 0 10rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('home') }}">College Moderne Cocody</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if(Route::currentRouteName()=='home') active @endif" aria-current="page" href="{{ url('home') }}">Accueille</a>
                <a class="nav-link @if(Route::currentRouteName()=='admin.inscription') active @endif" href="{{ route('admin.inscription') }}">Incription</a>
                <a class="nav-link @if(Route::currentRouteName()=='connexion') active @endif" href="{{ route('connexion') }}">Connexion</a>
                <a class="nav-link" href="#">A propos</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>