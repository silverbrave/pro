@extends('layouts.app')
@section('content')
    <style>
        .chevron{
            display:inline-block;
        }
    </style>
    <div class="row" style="background-color: rgba(254,0,0,0.8);">
        <div class="col-md-2">
            <img src="{{asset('images/logo/chevron-left.png')}}" alt="chevron-left" class="img chevron">
        </div>
        <div class="col-md-2">
            <h2 style="text-align: center">{{$projet->nom}}</h2>
        </div>
        <div class="col-md-2">
            <img src="{{asset('images/logo/chevron-right.png')}}" alt="chevron-right" class="img chevron">
        </div>

    </div>


    <div class="row">

        <div class="col-md-5">
            <h3>Description </h3>
            <p>Réalisation du projet : {{$projet->dateP}}</p>
            <p style="text-align: justify">{{$projet->description}}</p>
            <a href="{{$projet->lien}}">Visiter le projet</a>
            <h3>Technologies</h3>
            <p>{{$projet->competences}}</p>
        </div>
        <div class="col-md-7">
            <h3>Capture d'écran</h3>
            <img src="{!! URL::asset('images/'.$projet->image) !!}" alt="img_projet" class="img" style="max-height: 550px;max-width: 550px">
        </div>

    </div>
<br>
@endsection