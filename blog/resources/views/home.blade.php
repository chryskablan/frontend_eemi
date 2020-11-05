@extends('layouts.app')

@section('content')
<div class="container" style="height: 100vh; margin-top:200px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
