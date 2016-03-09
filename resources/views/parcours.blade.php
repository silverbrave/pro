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
<div id="timeline">
    <ul id="dates">
        <li><a href="#2013">2013</a></li>
        <li><a href="#2015">2015</a></li>
        <li><a href="#2016">2016</a></li>

    </ul>
    <ul id="issues">
        <li id="2013">
            <img src="{{asset('images/bacs.png')}}" width="256" height="256" />
            <h1>2013</h1>
            <p>Baccalauréat Scientifique<br>
            Lycée Frédéric Fays - Villeurbanne</p>
        </li>
        <li id="2015">
            <img src="{{asset('images/dut.jpg')}}" width="256" height="256" />
            <h1>2015</h1>
            <p>DUT Informatique<br>
            Université Claude Bernard - Lyon 1</p>
            <p>
                Stage Développeur web - Médiathèque de Bron - 3 mois
            </p>
        </li>
        <li id="2016">
            <img src="{{asset('images/licence.png')}}" width="256" height="256" />
            <h1>2016</h1>
            <p>Licence Informatique<br>
            Université Claude Bernard - Lyon 1</p>
        </li>
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
</div>

@stop
