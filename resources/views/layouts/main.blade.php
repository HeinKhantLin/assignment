<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css">
    </head>
    <body>
        <div class="container-fluid" id='app'>        

            <nav-bar title="PADC E-Commerce">
                <nav-item href="{{ url('/') }}">Home</nav-item>
                @guest
                <nav-item href="{{ route('login') }}">Login</nav-item>
                <nav-item href="{{ route('register') }}">Register</nav-item>
                @else
                <nav-item href="{{ url('/home') }}">Profile</nav-item>
                @endguest
            </nav-bar>

            <div class="row">
                @yield('content')
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
