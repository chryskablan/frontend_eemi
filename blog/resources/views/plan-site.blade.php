@extends('layouts.app')

@section('content')
    <div class="container" style="height: 100vh; padding-top:150px">
        <h1>Plan du site</h1>
        <ul>
            <li><a href="{{ route('welcome') }}">Accueil</a></li>
            <li><a href="{{ route('login') }}">Se connecter</a></li>
            <li><a href="{{ route('register') }}">S'inscrire</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="https://weboftoday.fr">Web Of Today</a></li>
        </ul>
    </div>
@endsection