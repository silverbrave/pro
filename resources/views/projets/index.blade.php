@extends('layouts.app')

@section('content')
    <style>
        .projecto{
            height:500px;
        }
        .projecto p{
            height:140px;
            overflow:hidden;

        }
        .projecto img{
            max-width:300px;
            max-height:300px;

        }
    </style>
    <h1>Les projets</h1>
        @if (Illuminate\Support\Facades\Auth::check())
        <p><a class="btn btn-primary" href="{{ route('projets.create') }}">Ajouter un projet</a></p>
        @endif
    <div class="row">

            @foreach($projets as $projet)

                    <!--  <div class="thumbnail" style="width:300px;display: inline-block;vertical-align: top">-->
        <div class="col-md-4">
            <div class="thumbnail projecto">
                <img src="{!! URL::asset('images/'.$projet->image) !!}" alt="img_projet" class="img img*responsive">
                <div class="caption">
                    <h3>{{$projet->nom}}</h3>
                    <p>{{$projet->description}}</p>
                    <p><a href="#" class="btn btn-primary" role="button">Accès au projet</a> <a href="{{route('projets.show',$projet->id)}}" class="btn btn-default" role="button">Plus d'infos</a></p>
                </div>
            </div>
        </div>
            @endforeach



    </div>


 @endsection