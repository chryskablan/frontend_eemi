@extends('layouts.auth.login')

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
            <div class="recent-connexion">
                <h4>Connexions récentes</h4>
                <small style="margin-bottom: 200px">cliquez sur votre image ou créer vous un compte.</small>
    
                <a href="#">
                    <div class="card card-login-existing" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/login.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Se connecter avec Chrys</a>
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="card card-login d-flex flex-column justify-content-center" style="width: 26rem; height:22rem">
                <div class="card-body card-login-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="validationCustom01" placeholder="Entrer vos email" autocomplete="off" required autofocus>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a email.
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" id="validationCustom02" placeholder="Entrer votre mot de passe" autocomplete="off" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter a password.
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-login">
                                Connexion
                            </button>
                        </div>
                        @if(Route::has('password.request'))
                            <div class="form-group lost-password" style="text-align:center;">
                                <a href="#">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        @endif
                    </form>
                    <div class="line"></div>
                    <div class="create-account d-flex align-items-center justify-content-center">
                        <a href="{{ route('register') }}" class="">
                            <button type="button" class="btn btn-success btn-register btn-lg">Créer un compte</button>
                        </a>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
@endsection