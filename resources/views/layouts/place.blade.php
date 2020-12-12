<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!--title-->
    <title>Medieval @yield('title', 'Medieval Game')</title>
	<!--meta-->
	<meta name="description" content="Free browser based games, with such games as Roma and Shugo, Middle, and Three Kingdoms."/>
	<meta name="keywords" content="romegames, roma, shugo, middle ages, medieval, online game, pbbg, mmo, mmorts, mmorpg, browser based game, browser game, shugo.nl, romegames.nl">
	<meta http-equiv="Content-Language" content="en-us">
	<meta name="author" content="Wiebe Eling de Boer">
	<meta name="copyright" content="2020 Wiebe Eling de Boer">
	<meta name="date" content="2020-3-6">
	<meta name="robots" content="INDEX, FOLLOW">
    <!-- Scripts -->
    <script type="module" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script type="module" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="module" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!--bootstrap-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--jquery-->
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
	<!-- Styles -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!--Fonts-->

	<!--music-->

    <!--library: three.js-->
    <script type="text/javascript" src="{{ asset('library/three.js') }}"></script>
    <!--camera controls-->
    <script type="text/javascript" src="{{ asset ('controls/FPControls.js') }}"></script>
    <!--defense buildings-->
    <script type="text/javascript" src="{{ asset ('building/wallmaker.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/pallisademaker.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/rampartmaker.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/citywall.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/citytower.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/castlegate.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/pallisadegate.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/rampartgate.js') }}"></script>
    <!--generators-->
    <script type="text/javascript" src="{{ asset ('building/generator_quarter.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/generator_building.js') }}"></script>    
    <!--commerce buildings-->
    <script type="text/javascript" src="{{ asset ('building/market.js') }}"></script>  
    <script type="text/javascript" src="{{ asset ('building/inn.js') }}"></script>  
    <!--religious buildings-->
    <script type="text/javascript" src="{{ asset ('building/cathedral.js') }}"></script>  
    <script type="text/javascript" src="{{ asset ('building/chapel.js') }}"></script> 
    <!--monastic buildings-->

    <!--crusader buildings-->

    <!--feudal buildings-->

    <!--forest and trees-->
    <script type="text/javascript" src="{{ asset ('building/forest.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/foresttree.js') }}"></script>
    <!--entertainment buildings-->
    <script type="text/javascript" src="{{ asset ('building/jousting.js') }}"></script>    

    <!--collision detection-->
    <script type="text/javascript" src="{{ asset ('collision/collision.js') }}"></script>
    <!--environment: plane en skybox-->
    <script type="text/javascript" src="{{ asset ('environment/plane.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('environment/Skybox.js') }}"></script>
    <!--lighting-->
    <script type="text/javascript" src="{{ asset ('lighting/WorldLight.js') }}"></script>
    <!--loaders-->
    <script type="text/javascript" src="{{ asset ('loaders/OBJLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('loaders/MTLLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('loaders/ModelLoader.js') }}"></script>
</head>
<body class="body-cards" onload="GameLoop()">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Medieval
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
						
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Dashboard</a> </li>   
						<li class="nav-item"><a class="nav-link" href="{{ url('/home') }}"> {{ Auth::user()->name }}</a></li>
							
                        @endguest
						
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </div>
            </div>
        </nav>		
		<!--game menu-->
		<div class="game-menu">
					<div class="links">
						<a href="/forum">Forum</a>
						<a href="/manual">Manual</a>
						<a href="/dynasty">Dynasty</a>
						<a href="/region">Worldmap</a>
						<a href="/chronicles">Chronicles</a>
						<a href="/users/{{ Auth::user()->id }}">Account</a>
					</div>			
		</div>	
		<!--content-->
		<div class="vh-100">
		@include('session')
        <main class="py-4">
            @yield('content')
        </main>
		</div>
    </div>
</body>
</html>