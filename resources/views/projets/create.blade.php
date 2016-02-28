@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajout d'un projet</h1>
        {!!Form::open(['route' => 'projets.store','method'=>'POST', 'files'=> true]) !!}

        <div class="form-group">
            {!!Form::label('label', 'Nom *') !!}
            {!!Form::text('nom', null, ['class' => 'form-control','id' =>'nom']) !!}
        </div>
         <div class="form-group">
            {!!Form::label('label', 'Date réalisation *') !!}
            {!!Form::text('dateP', null, ['class' => 'form-control','id' =>'dateP']) !!}
                </div>
         <div class="form-group">
            {!!Form::label('label', 'Description *') !!}
            {!!Form::textarea('description', null, ['class' => 'form-control','id' =>'desc']) !!}
                </div>
         <div class="form-group">
            {!!Form::label('label', 'Compétences *') !!}
            {!!Form::text('competences', null, ['class' => 'form-control','id' =>'competences']) !!}
                </div>
         <div class="form-group">
            {!!Form::label('label', 'Lien *') !!}
            {!!Form::text('lien', null, ['class' => 'form-control','id' =>'lien']) !!}
                </div>

        <button class="btn btn-primary" id="btnEnvoyer">Envoyer</button>
        {!! Form::reset('Reset') !!}
        {!! Form::close() !!}
    </div>
@endsection