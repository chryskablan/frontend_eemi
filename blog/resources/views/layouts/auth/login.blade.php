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
