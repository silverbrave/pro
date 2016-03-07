@extends('layouts.app')

@section('content')

    <h1>Les projets</h1>
        @if (Illuminate\Support\Facades\Auth::check())
        <p><a class="btn btn-primary" href="{{ route('projets.create') }}">Ajouter un projet</a></p>
        @endif

        <div class="row">
            @foreach($projets as $projet)
            <div class="col-sm-6 col-md-4">

                <div class="thumbnail">
                    <img src="{!! URL::asset('images/'.$projet->image) !!}" alt="img_projet">
                    <div class="caption">
                        <h3>{{$projet->nom}}</h3>
                        <p>{{$projet->description}}</p>
                        <p><a href="#" class="btn btn-primary" role="button">Accès au projet</a> <a href="#" class="btn btn-default" role="button">Plus</a></p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
 @endsection