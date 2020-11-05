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
     <!-- nav bar -->
     <nav class="nav smart-scroll navbar-expand-lg justify-content-center navbar-blm">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo-wot-white.png') }}" alt="">
        </a>
        <ul class="nav nav-pills flex-column flex-sm-row justify-content-center align-items-center" id="main_nav">
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
    <div id="app">
        <main class="py-4">
            @if(Auth::check() && !Auth::user()->hasVerifiedEmail())
                <div class="container">
                    <div class="alert alert-danger">
                        Veuillez valider votre adresse mail.
                        <a href="{{ route('user.send.validation', ['user_id' => Auth::user()->id]) }}">ici.</a>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="container">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="container">
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
   </div>
   <footer class="footer container-fluid py-5 ">
       <div class="row">
           <div class="col-12 col-md">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/logo-wot-white.png') }}" alt="">
                </a>
               <div class="d-flex flex-column">
                    <a href="{{ route('plan-site') }}"><small>Plan du site</small></a>
                    <a href="{{ route('mentions') }}"><small>Mentions légales</small></a>
                    <small>Créé par <a href="#">WEB OF TODAY</a></small>
                    <small class="d-block mb-3 text-muted">© 2020-2022</small>
               </div>
           </div>
           <div class="col-6 col-md">
               <h5>ressources</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Cool stuff</a></li>
                   <li><a class="text-muted" href="#">Random feature</a></li>
                   <li><a class="text-muted" href="#">Team feature</a></li>
                   <li><a class="text-muted" href="#">Stuff for developers</a></li>
                   <li><a class="text-muted" href="#">Another one</a></li>
                   <li><a class="text-muted" href="#">Last time</a></li>
               </ul>
           </div>
           <div class="col-6 col-md">
               <h5>features</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Resource</a></li>
                   <li><a class="text-muted" href="#">Resource name</a></li>
                   <li><a class="text-muted" href="#">Another resource</a></li>
                   <li><a class="text-muted" href="#">Final resource</a></li>
               </ul>
           </div>
           <div class="col-6 col-md">
               <h5>Menu</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Business</a></li>
                   <li><a class="text-muted" href="#">Education</a></li>
                   <li><a class="text-muted" href="#">Government</a></li>
                   <li><a class="text-muted" href="#">Gaming</a></li>
               </ul>
           </div>
           <div class="col-6 col-md">
               <h5>about</h5>
               <ul class="list-unstyled text-small">
                   <li><a class="text-muted" href="#">Team</a></li>
                   <li><a class="text-muted" href="#">Locations</a></li>
                   <li><a class="text-muted" href="#">Privacy</a></li>
                   <li><a class="text-muted" href="#">Terms</a></li>
               </ul>
           </div>
       </div>
   </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) { // check if element exists
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if(scroll_top < last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                }
                else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                last_scroll_top = scroll_top;
            });
        }
    </script>
    @yield('scripts')
</body>

</html>
