<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sonography">
    <meta name="author" content="Mehdi Asgari">
    <meta name="generator" content="Mehdi Asgari">
    <title>سونوگرافی</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sono.css')}}" rel="stylesheet">

</head>
<body>
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <img src="{{asset('img/logo1.png')}}" height="50px">
        </div>
    </div>
</header>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">نوبت 1: @yield('first_nobat')</h3>
        </div>
    </section>

    <div >
        <div class="container">
            <div class="row">
                @yield('table1')
                @yield('table2')



            </div>
        </div>
    </div>

</main>

<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
