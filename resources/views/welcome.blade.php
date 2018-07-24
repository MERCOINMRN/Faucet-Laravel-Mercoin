<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Faucet - Mercoin</title>
        <meta charset="utf-8" />
    		<meta name="viewport" content="width=device-width, initial-scale=1" />
    		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">
    	</head>
    	<body class="landing">
    		<div id="page-wrapper">

    			<!-- Header -->
    				<header id="header" class="alt">
    					<h1><a href="{{ url('/home') }}">Mercoin</a></h1>
    					<nav id="nav">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}" class="button special">Inicio</a>
                            @else
                                <a href="{{ route('login') }} " class="button special">Login  </a>
                                <a href="{{ route('register') }}" class="button">Registrarse</a>
                            @endauth
                        </div>
                    @endif
                </div>
    					</nav>
    				</header>

    			<!-- Banner -->
    				<section id="banner">
    					<h2>Faucet - Mercoin</h2>
    					<p>obten 0.5 MRN gratis cada 2 horas y 2 MRN por referido , ¿a que esperas para registrarte? </p>
    					<ul class="actions">
    						<li><a href="{{ route('register') }}" class="button special">Registrate!</a></li>
    						<li><a href="https://mercoin.org/" class="button">Sobre Mercoin</a></li>
    					</ul>
    				</section>

    			<!-- Main -->
    				<section id="main" class="container">

    					<section class="box special">
    						<header class="major">
    							<h2>Servicio Profesional
    							<br />
    							Diseño y Desarrollo de Faucets</h2>
    							<p>Ofrecemos el servicio de diseño y desarrollo de faucets en Mercoin o en otras criptomonedas <br />
    							¿para que puedes crear una faucet ? <br/>
                  puedes crear tu faucet y monetizarla con anuncios o atraer trafico a una pagina web , grupo de telegram ,
                  <br /> al crear una faucet consigues mucho trafico y nuevos clientes para tus proyectos , si quieres mas información no dudes en contactarnos.
                </p>
                <div class="container">
  <div class="row">
    <div class="col-sm">
      <div id="SC_TBlock_545499" class="SC_TBlock">loading...</div>
    </div>
    <div class="col-sm">
    <div id="SC_TBlock_545503" class="SC_TBlock">loading...</div>
    </div>
    <div class="col-sm">
    <div id="SC_TBlock_545504" class="SC_TBlock">loading...</div>
    </div>
  </div>
</div>

    						</header>
    						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
    					</section>

    					<section class="box special features">
    						<div class="features-row">
    							<section>
    								<span class="icon major fa-bolt accent2"></span>
    								<h3>Magna etiam</h3>
    								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    <div id="SC_TBlock_545508" class="SC_TBlock">loading...</div>
    							</section>
    							<section>
    								<span class="icon major fa-area-chart accent3"></span>
    								<h3>Ipsum dolor</h3>
    								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                <div id="SC_TBlock_545509" class="SC_TBlock">loading...</div>
    							</section>
    						</div>
    						<div class="features-row">
    							<section>
    								<span class="icon major fa-cloud accent4"></span>
    								<h3>Sed feugiat</h3>
    								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    <div id="SC_TBlock_545511" class="SC_TBlock">loading...</div>
    							</section>
    							<section>
    								<span class="icon major fa-lock accent5"></span>
    								<h3>Enim phasellus</h3>
    								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>                    
                    <div id="SC_TBlock_545512" class="SC_TBlock">loading...</div>
    							</section>
    						</div>
    					</section>

    				</section>

    			<!-- Footer -->
    				<footer id="footer">
    					<ul class="icons">
    						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
    						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
    						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
    						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
    						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
    					</ul>
    					<ul class="copyright">
    						<li><a href="https://axolot.me/"><img src="https://i.imgur.com/nGxet6T.png" alt="axolot" height="100" width="100"></a></li>
    					</ul>
    				</footer>

    		</div>

    		<!-- Scripts -->
        <script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545499",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545503",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545504",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545508",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545509",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545511",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545511",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push(
        {
            id : "545512",
            domain : "n.tckn-code.com"
        }
    );
</script>
<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>


<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

<script type="text/javascript" src="//st-n.tckn-code.com/js/a.js"></script>

    			<script src="assets/js/jquery.min.js"></script>
    			<script src="assets/js/jquery.dropotron.min.js"></script>
    			<script src="assets/js/jquery.scrollgress.min.js"></script>
    			<script src="assets/js/skel.min.js"></script>
    			<script src="assets/js/util.js"></script>
    			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    			<script src="assets/js/main.js"></script>
          <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>

    	</body>
</html>
