@extends('layouts.app')

@section('content')
<h1>Me Contacter</h1>
<div class="col-md-4">
    <img src="{{asset('images/logo.png')}}" alt="logo" style="width: 250px">
    <h3>Florian PALABOST</h3>
    <p>Futur Développeur Web</p>
    <a href="mailto:florian.palabost@etu.univ-lyon1.fr">florian.palabost@etu.univ-lyon1.fr</a>
    <br><br>
    <a href="https://www.linkedin.com/in/florian-palabost-881711b4" target="_blank"><img src="{{asset('images/in.png')}}" alt="logo_linkedin"  class="logo_footer img img-responsive"></a>
</div>
<div class="col-md-8">
    {!!Form::open(['route' => 'postContact','method'=>'POST']) !!}
    <div class="form-group">
        {!!Form::label('label', 'Nom *') !!}
        {!!Form::text('nom', null, ['class' => 'form-control','id' =>'nom','placeholder'=>'Votre nom']) !!}
    </div>
    <div class="form-group">
        {!!Form::label('label', 'Adresse E-mail') !!}
        {!!Form::text('mail', null, ['class' => 'form-control','id' =>'mail', 'placeholder' =>'Votre adresse Mail']) !!}
    </div>

    <div class="form-group">
        {!!Form::label('label', 'Message ') !!}
        {!!Form::textarea('message', null, ['class' => 'form-control','id' =>'message','placeholder'=>'Votre message ...']) !!}
    </div>

    <button class="btn btn-primary" id="btnEnvoyer">Envoyer</button>
    {!! Form::reset('Effacer') !!}
</div>
</div>

@endsection