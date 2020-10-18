<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!--Link Icon Title-->
{{--    <link href="img/favicon.png" rel="icon">--}}

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css')}}">

    <!--font google-->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#"><h1>Start</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admins
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('company')}}">add Company</a>
                    <a class="dropdown-item" href="{{ route('category')}}">add Category</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            @auth
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logoute')}}">LogOut</a>
                    </div>
                </li>
                </ul>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-info"><i class="fa fa-user"></i> Login</a>
                <a href="{{ route('register')}}" class="btn btn-info ml-3"><i class="fa fa-user-plus"></i> Register</a>
            @endauth
        </form>
    </div>
    </div>
</nav>
<body>

@include('partials._session')

@yield('content')

<!-- jquery -->
<script src="{{ asset('dist/js/jquery-3.3.1.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{ asset('dist/js/bootstrap.min.js')}}"></script>

<!-- note.min.js -->
<script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

@yield('script')

</body>
</html>
