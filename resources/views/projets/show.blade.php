@extends('layouts.app')
@section('content')

    <h2>{{$projet->nom}}</h2>

    <div class="row">

        <div class="col-md-3">
            <h3>Description </h3>
            <p>{{$projet->description}}</p>
            <a href="{{$projet->lien}}">Visiter le projet</a>
            <h3>Technologies</h3>
            <p>{{$projet->competences}}</p>
        </div>
        <div class="col-md-5">
            <h3>Capture d'écran</h3>
            <img src="{!! URL::asset('images/'.$projet->image) !!}" alt="img_projet" class="img" style="max-height: 350px;max-width: 350px">
        </div>

    </div>

@endsection