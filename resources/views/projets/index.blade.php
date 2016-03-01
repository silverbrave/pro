@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Les projets</h1>
        @if (Illuminate\Support\Facades\Auth::check())
        <p><a class="btn btn-primary" href="{{ route('projets.create') }}">Ajouter un projet</a></p>
        @endif
        @foreach($projets as $projet)
            <div class="row">
                <h2>{{$projet->nom}}</h2>
                <p>{{$projet->description}}</p>
                <img id="#" src="{!! URL::asset('images/'.$projet->image) !!}" alt="aperçu image" class="img" style="max-height: 300px;max-width: 300px"/>
            </div>
         @endforeach
    </div>
 @endsection