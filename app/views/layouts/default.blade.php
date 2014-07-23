<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Grupo Hermes Infraestructura')</title>

    <!-- Bootstrap -->
    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('stylesheets')
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">SAO GHI</a>
            </div>
            <div class="navbar-collapse collapse">
                @if ( ! Auth::check() )
                {{ Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'navbar-form navbar-right', 'role' => 'login']) }}
                    @if (Session::has('login_error'))
                    <span class="label label-danger">Invalid credentials</span>
                    @endif
                    <!-- Username Form Input -->
                    <div class="form-group">
                        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
                    </div>
                    <!-- Password Form Input -->
                    <div class="form-group">
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                    </div>
                    <div class="checkbox">
                        <label class="remember-me">
                            {{ Form::checkbox('remember') }} Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                {{ Form::close() }}
                @else
                    @include('layouts.partials.obra_info')
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="icon icon-wh i-profile"></span> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('logout') }}">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- menu a modulos de app -->
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                @endif
            </div>
        </div>
    </div>

    <section class="container">
        @yield('content')
    </section>

    <section class="container">
        <hr>
        <footer>
            <p>&copy; Grupo Hermes Infraestructura 2014</p>
        </footer>
    </section>

    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</body>
</html>