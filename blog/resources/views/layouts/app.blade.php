<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- nav bar -->
        <nav class="nav nav-pills flex-column flex-sm-row justify-content-center navbar-blm fixed-top">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo-wot-white.png') }}" alt="">
            </a>
            <ul class="nav nav-pills flex-column flex-sm-row justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}">Profil</a>
                    </li>
                @endif
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Deconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
   </div>
   <footer class="footer container-fluid py-5">
       <div class="row">
           <div class="col-12 col-md">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/logo-wot-white.png') }}" alt="">
                </a>
               <div class="d-flex flex-column">
                    <a href="#"><small>Plan du site</small></a>
                    <a href="#"><small>Mentions légales</small></a>
                    <small>Créé par <a href="https://weboftoday.fr">WEB OF TODAY</a></small>
                    <small class="d-block mb-3 text-muted">© 2020-2022</small>
               </div>
           </div>
           <div class="col-6 col-md">
               <h5>Menu</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Accueil</a></li>
                   <li><a class="text-muted" href="#">Connexion</a></li>
                   <li><a class="text-muted" href="#">Inscription</a></li>
                   <li><a class="text-muted" href="{{ route('about') }}">A Propos</a></li>
               </ul>
           </div>
           <div class="col-6 col-md">
               <h5>Black lives matter</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Article 1</a></li>
                   <li><a class="text-muted" href="#">Article 2</a></li>
                   <li><a class="text-muted" href="#">Article 3</a></li>
               </ul>
           </div>
           <div class="col-6 col-md">
               <h5>Évenemment</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Event 1</a></li>
                   <li><a class="text-muted" href="#">Event 2</a></li>
                   <li><a class="text-muted" href="#">Event 3</a></li>
               </ul>
           </div>
           <div class="col-6 col-md">
               <h5>Histoire</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Histoire 1</a></li>
                   <li><a class="text-muted" href="#">Histoire 2</a></li>
                   <li><a class="text-muted" href="#">Histoire 3</a></li>
                   <li><a class="text-muted" href="#">Histoire 4</a></li>
               </ul>
           </div>
       </div>
   </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts')
</body>

</html>
