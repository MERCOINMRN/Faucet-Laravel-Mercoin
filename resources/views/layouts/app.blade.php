<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | La criptomoneda más importante de la región Latinoamericana</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <style media="screen">
      a:hover{
        text-decoration: none;
      }
    </style>
        <div id="SC_TBlock_544332" class="SC_TBlock">loading...</div>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
 <li>
                                      <a href="{{ route('perfil') }}">Perfil</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>


                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "541490",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "541497",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "544332",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "544334",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "544336",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "544337",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "544338",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

  <!-- terminan Scripts -->
</body>
</html>
