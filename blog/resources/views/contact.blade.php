@extends('layouts.app')

@section('content')
<div class="container" style="height: auto; margin-top:150px">
    @if(session('contact_success'))
        <div class="alert alert-success">
            {{ session('contact_success') }}
        </div>
    @endif
    <h1>Contactez-nous</h1>
    <form action="{{ route('sendContact') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col">
                <input type="text" value="{{ old('firstname') }}" name="firstname" class="form-control form-control-lg @error('firstname') is-invalid @enderror" placeholder="Prénom" aria-autocomplete="none" autocomplete="off">
            </div>
            <div class="col">
                <input type="text" value="{{ old('lastname') }}" name="lastname" class="form-control form-control-lg @error('lastname') is-invalid @enderror" placeholder="Nom" aria-autocomplete="none" autocomplete="off">
            </div>
        </div>

        <div class="form-group mt-3">
            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control form-control-lg @error('subject') is-invalid @enderror" placeholder="Votre sujet" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Votre Email" required autocomplete="off" aria-autocomplete="none">
        </div>

        <div class="form-group">
            <textarea class="form-control form-control-lg @error('message') is-invalid @enderror" value="{{ old('message') }}" name="message" placeholder="Votre message" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <h2 class="mt-5">Sinon retrouvez-nous ici</h2>
    <div class="google-maps mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5246.559688090314!2d2.2389880285312183!3d48.891003721313425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66505aaadd1dd%3A0xf187c86ce82c7889!2sLa%20D%C3%A9fense!5e0!3m2!1sfr!2sfr!4v1604596658327!5m2!1sfr!2sfr" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
@endsection