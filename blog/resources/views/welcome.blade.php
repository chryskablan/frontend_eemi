@extends('layouts.app')

@section('content')
{{-- Parti background, l'image est uploader directement en css --}}
<div class="bg-background">
    <div class="bg-text">
        <h1>Black Lives Matter</h1>
    </div>
</div>

<!-- section 1, take action --> 
<section class="container-fluid blm-section">
    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
        <h2 class="blm-title">Prenez les devants</h2>
        <div class="line"></div>
    </div>
    <div class="container-fluid container-1 d-flex justify-content-between align-items-center mt-5">
        <div class="section1-bloc1">
            <video controls class="section1-video" muted>
                <source src="{{ asset('assets/videos/black-lives-matter-protests-around-the-world.mp4') }}" type="video/mp4">
                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                Your browser does not support the video tag.
              </video>
        </div>
        <div class="section1-bloc2">
            <p>
                Des manifestants de tous âges, de toutes races et de tous horizons se présentent aux 
                manifestations de Black Lives Matter par amour pour leurs semblables. 
                Par amour pour George Floyd. Par amour pour Breonna Taylor. 
                Par amour pour tous les Noirs qui ont perdu la vie à cause de la couleur de leur peau.
                <br>
                Rejoignez le Mouvement de lutte pour la liberté, la libération et la justice en vous 
                inscrivant aux sites pour soutenir notre travail et consulter nos ressources.
            </p>
        </div>
    </div>
</section>

<!-- section 3, a propos du mouvement BLM --> 
<section class="container-fluid blm-section3 mb-5">
    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
        <h2 class="blm-title-section3 mt-5">A propos de BLM</h2>
        <div class="line"></div>
    </div>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="section3-text">
            <p>
                <strong>#BlackLivesMatter</strong> a été fondée en 2013 en réponse à l'acquittement 
                du meurtrier de <a href="https://en.wikipedia.org/wiki/Trayvon_Martin" target="_blank">Trayvon Martin</a>. Black Lives Matter Foundation Inc est une organisation 
                mondiale aux États-Unis, au Royaume-Uni et au Canada, dont la mission est d'éradiquer la 
                suprématie blanche et de construire un pouvoir local afin d'intervenir dans 
                la violence infligée aux communautés noires par l'État et les policiers. 
                En combattant et contrant les actes de violence, en créant un espace pour l'imagination 
                et l'innovation des Noirs et en centrant la joie des Noirs, nous gagnons des
                améliorations immédiates dans nos vies.
            </p>
            <p>
                <strong>Nous sommes un collectif de libérateurs</strong> qui croient en un mouvement inclusif et spacieux. 
                Nous pensons également que pour gagner et amener autant de personnes avec nous en cours de route, 
                nous devons dépasser le nationalisme étroit qui est trop répandu dans les communautés noires. 
                Nous devons nous assurer que nous construisons un mouvement qui nous amène tous au front.
            </p>
            <p>
                <strong>Nous affirmons</strong> la vie des personnes homosexuelles et trans noires, des personnes handicapées, 
                des personnes sans papiers, des personnes ayant des antécédents, des femmes et de tous les Noirs vivant selon le genre. 
                Notre réseau regroupe ceux qui ont été marginalisés au sein des mouvements de libération des Noirs.
            </p>
            <p>
                <strong>Nous travaillons</strong> pour un monde où les Noirs ne sont plus systématiquement visés par la mort.
            </p>
            <p>
                <strong>Nous affirmons notre humanité</strong>, notre contribution pour cette société, et notre résilience
                face à une oppression mortelle.
            </p>
            <p>
                <strong>L'appel du Black Live to Matter</strong> est un cri de ralliement pour TOUTES les vies des Noirs en quête de libération.
            </p>
        </div>

        <div class="button-more">
            <a href="{{ route('about') }}">
                <button class="more">
                    En savoir plus
                </button>
            </a>
        </div>
    </div>
</section>

<!-- section 2, parti aide a combattre la discrimination --> 
<section class="container-fluid blm-section2 d-flex justify-content-center align-items-center flex-column">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h2 class="blm-title-section2 pt-5">Aidez-nous à combattre la discrimination</h2>
        <div class="line"></div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="section2-text">
            <p>
                <strong>Nous devons voir ce que vous voyez.</strong> Black Lives Matter est une cible centrale de la 
                désinformation et vous êtes une ligne de défense clé. 
                Signalez les sites, histoires, publicités, comptes sociaux et publications suspects sur BLM.
            </p>
        </div>
    </div>
    <div class="container section2-button-help mb-5 mt-5 d-flex justify-content-center align-items-center">
        <a href="#">
            <button>
                <strong>Aidez-nous !</strong> 
            </button>
        </a>
    </div>
</section>

<!-- section 4, actualité --> 
<section class="container-fluid actualite-section">
    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
        <h2 class="blm-title-section3 mt-5">Quelques Actualités</h2>
        <div class="line"></div>
    </div>

    <div class="actualite mt-5">
        <div class="container-overlay">
            <img src="{{ asset('assets/img/actu/actu1.jpg') }}" alt="Avatar" class="img-overlay">
            <div class="overlay">
                <div class="text">
                   <p>
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, in expedita vitae alias facilis aspernatur rerum fugit pariatur ullam at culpa sed commodi ipsam ea architecto debitis ab nobis exercitationem?
                   </p>

                   <a href="#">
                       <button class="btn btn-secondary">
                            Lire la suite
                       </button>
                   </a>
                </div>
            </div>
        </div>
        <div class="container-overlay">
            <img src="{{ asset('assets/img/actu/actu2.jpg') }}" alt="Avatar" class="img-overlay">
            <div class="overlay">
                <div class="text">
                   <p>
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, in expedita vitae alias facilis aspernatur rerum fugit pariatur ullam at culpa sed commodi ipsam ea architecto debitis ab nobis exercitationem?
                   </p>

                   <a href="#">
                       <button class="btn btn-secondary">
                            Lire la suite
                       </button>
                   </a>
                </div>
            </div>
        </div>
        <div class="container-overlay">
            <img src="{{ asset('assets/img/actu/actu3.jpg') }}" alt="Avatar" class="img-overlay">
            <div class="overlay">
                <div class="text">
                   <p>
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, in expedita vitae alias facilis aspernatur rerum fugit pariatur ullam at culpa sed commodi ipsam ea architecto debitis ab nobis exercitationem?
                   </p>

                   <a href="#">
                       <button class="btn btn-secondary">
                            Lire la suite
                       </button>
                   </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section 5, newsletter inshallah --> 
<section class="container-fluid newsletter d-flex justify-content-center align-items-center flex-column">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h2 class="blm-title-section2 pt-5">Abonnez-vous pour plus d'actu</h2>
        <div class="line"></div>
    </div>
    <div class="container section2-button-help mt-5 d-flex justify-content-center align-items-center">
        <a href="#">
            <button>
                <strong>S'abonner</strong> 
            </button>
        </a>
    </div>
</section>
@endsection 