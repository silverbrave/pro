@extends('layouts.app')


<div class="container">
    @section('content')
    <div class="row">
        <h2>verif authentification</h2>
                    @if (Illuminate\Support\Facades\Auth::check())
                        <p>Vous etes connecté</p>
                    @else
                        <p>vous n etes pas co</p>
                    @endif
        <h2>A propos de moi </h2>
        <p>blabla</p>
    </div>
</div>
@endsection
