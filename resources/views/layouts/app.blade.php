<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body id="app-layout">
    <nav class="custom-navbar navbar navbar-default navbar-static-top custom-menu">
        <div class="custom-menu-blur"></div>
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand dynamic-font-color" href="{{ url('/') }}">
                    Index
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a class="dynamic-font-color" href="{{ url('/board') }}">Board</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <!--
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    -->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dynamic-font-color" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-sign-out"></i>Admin</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <!--Footer-->
    <footer class="container">
        <div class="custom-navbar" id="copyright">
            <div class="setp-20">&nbsp;</div>
            <p class="right">Powered by Laravel. ❤ Changle.</p>
            <p class="left">©2016-now . Changle</p>
        </div>
    </footer>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>
