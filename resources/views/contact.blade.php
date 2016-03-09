@extends('layouts.app')

@section('content')
<h1>Formulaire de Contact</h1>
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
@endsection