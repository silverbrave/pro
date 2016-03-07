@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-4">
        <h1>Florian PALABOST</h1>
        <button type="button" class="btn btn-default" aria-label="Left Align" onclick="javascript:window.print()">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
        </button>
<button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location='{{asset('CV_Florian_PALABOST.pdf')}}';">
            <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
        </button>

    </div>
    <div class="col-md-4">
        <img src="{{asset('images/profil.png')}}" alt="photo_profil" class="img-circle"/>
    </div>
    <div class="col-md-4">
       <p>11 rue Paul Valéry<br>
           69780 Mions<br>
           06 34 15 86 07<br>
           21 ans<br>
           florian.palabost@etu.univ-lyon1.fr<br>
           Permis B (voiture personnelle)</p>
    </div>
</div>

<div class="row">
    <h3>Formations</h3>
    <p>2016  | Licence Informatique<br>
    Université Claude Bernard, Lyon 1<br>
    2015  | DUT Informatique<br>
    Université Claude Bernard, Lyon 1<br>
    2013  | Baccalauréat Scientifique<br>
    Lycée Frédéric Fays, Villeurbanne</p>
</div>

<div class="row">
    <h3>Compétences</h3>
    <div class="col-md-6">
        <h4>Web</h4>
        PH5 MVC
        <div class="progress" style="width: 70%;">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                85%
            </div>
        </div>
        Framework Laravel et Bootstrap
        <div class="progress" style="width: 70%;">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                85%
            </div>
        </div>
        HTML CSS JavaScript
        <div class="progress" style="width: 70%;">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                85%
            </div>
        </div>
        <h4>Design</h4>
        Photoshop
        <h4>Programmation</h4>
        Java
        <div class="progress" style="width: 70%;">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                80%
            </div>
        </div>
        C/C++
        <div class="progress" style="width: 70%;">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                70%
            </div>
        </div>
        Python
        <div class="progress" style="width: 70%;">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                50%
            </div>
        </div>
    </div>
    <div class="col-md-6">
    ijsiocjfoijsoi
    </div>
    </div>


Expériences

Centres d'intérêts
Sports : Tennis,  VTT, Volley, Ski
Loisirs : les nouvelles technologies, jeux vidéo


@stop