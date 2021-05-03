@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 200px; margin-bottom: 150px;">
        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" class="form-control form-control-lg" id="name" placeholder="John Doe">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control form-control-lg" name="email" type="email" id="email" placeholder="john@example.com">
          </div>

          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input class="form-control form-control-lg" name="subject" type="text" placeholder="Sujet">
          </div>
          
          <div class="mb-3">
            <label for="message" class="form-label">Meesgae</label>
            <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="votre message ici"></textarea>
          </div>

          <div class="mb-3">
            <button type="button" class="btn btn-primary">Envoyer</button>
          </div>
    </div>
@endsection