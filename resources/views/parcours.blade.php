@extends('layouts.app')
@section('csse')
    <link rel="stylesheet" href="{{asset('css/style.css')}}" media="screen" />

    <script src="{{asset('jquery.timelinr-0.9.6.js')}}"></script>
    <script>
        $(function(){
            $().timelinr({
                arrowKeys: 'true',
                autoPlay: 'true',
                autoPlayPause: 2500
            })
        });
    </script>
@stop

@section('content')
    <h1 style="text-align: center">Mon parcours</h1>
    @if (Illuminate\Support\Facades\Auth::check())
        <p><a class="btn btn-primary" href="{{ route('parcours.create') }}">Ajouter un parcours</a></p>
    @endif
<div id="timeline">

    <ul id="dates">
        @foreach($parcours as $parcour)
        <li><a href="#{{$parcour->annee}}">{{$parcour->annee}}</a></li>
        @endforeach
    </ul>

    <ul id="issues">
        @foreach($parcours as $parcour)
        <li id="{{$parcour->annee}}">
            <img src="{{asset('images/'.$parcour->image)}}" width="256" height="256" />
            <h1>{{$parcour->annee}}</h1>
            <p>{{$parcour->diplome}}<br>
            {{$parcour->description}}</p>
            @if (Illuminate\Support\Facades\Auth::check())
                <div class="col-md-6">
                    {!! Form::open(array('route' => array('parcours.destroy', $parcour->id), 'method' => 'delete')) !!}
                    <button type="submit"  class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer ce parcours ?');">Supprimer</button>
                    {!! Form::close() !!}
                </div>
            @endif
        </li>
        @endforeach
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
</div>

@stop
