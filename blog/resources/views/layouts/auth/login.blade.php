<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Connexion - BLM</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
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
                    <a href="#"><small>Plan du site</small></a>
                    <a href="#"><small>Mentions légales</small></a>
                    <small>Créé par <a href="#">WEB OF TODAY</a></small>
                    <small class="d-block mb-3 text-muted">© 2020-2022</small>
                </div>
           </div>
            <div class="col-6 col-md">
                <h5>Menu</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{ route('welcome') }}">Accueil</a></li>
                    <li><a class="text-muted" href="{{ route('login') }}">Se connecter</a></li>
                    <li><a class="text-muted" href="{{ route('register') }}">S'inscrire</a></li>
                    <li><a class="text-muted" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>A propos</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">L'équipe</a></li>
                    <li><a class="text-muted" href="#">Localisation</a></li>
                    <li><a class="text-muted" href="#">Politique de cookie</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Réseau sociaux</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Facebook</a></li>
                    <li><a class="text-muted" href="#">Instagram</a></li>
                    <li><a class="text-muted" href="#">Linkedin</a></li>
                    <li><a class="text-muted" href="#">Twitter</a></li>
                </ul>
            </div>
       </div>
   </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}"></script>
    {{-- <script>
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
    </script> --}}
    @yield('scripts')
</body>

</html>
