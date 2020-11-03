@extends('layouts.auth.login')
<title>Inscription - BLM</title>
@section('content')
{{-- arrow back to home page --}}
<a href="{{ url('/') }}" class="arrow-west">
    <span class="material-icons">
        west
    </span>
</a>
<div class="content d-flex justify-content-center align-items-center" style="height: 70vh; width:100%;">
    <div class="container-fluid container-login" style="">

        {{-- 2e container --}}
        <div class="container d-flex justify-content-around align-items-center" style="">
            <div class="card card-login d-flex flex-column justify-content-center" style="width: 45rem; height:auto">
                <div class="card-body card-login-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="firstname" class="col-form-label">Prénom<span style="color: red;">*</span></label>
                                <input type="text" name="firstname" id="firstname" class="form-control form-control-lg @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" placeholder="Entrer votre prénom" required autocomplete="off" autofocus aria-autocomplete="none">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="col-form-label">Nom<span style="color: red;">*</span></label>
                                <input type="text" name="lastname" id="lastname" class="form-control form-control-lg @error('lastname') is-invalid @enderror" placeholder="Entrer votre nom" value="{{ old('lastname') }}" required autocomplete="off" autofocus aria-autocomplete="none">
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mt-3">
                            <div class="col-md-4">
                                <label for="email" class="col-form-label">Email<span style="color: red;">*</span></label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="john@example.com" autocomplete="off" aria-autocomplete="none" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="password" class="col-form-label">Mot de passe<span style="color: red;">*</span></label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Entrer un mot de passe" autocomplete="off" aria-autocomplete="none" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="password-confirm" class="col-form-label">Confirmation mot de passe</label>
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="birth">Date de naissance</label>
                            <input type="date" max="2002-01-31" class="form-control form-control-lg @error('birth') is-invalid @enderror" value="{{ old('birth') }}" name="birth" placeholder="01/01/2000" autocomplete="off" aria-autocomplete="none">
                            @error('birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="line"></div>
                        <div class="create-account d-flex flex-column align-items-center justify-content-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-login">
                                    Créer un compte
                                </button>
                            </div>
                            <div class="form-group lost-password" style="text-align:center;">
                                <a href="{{ route('login') }}">
                                    Déja un compte ? Connectez vous ici 
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection