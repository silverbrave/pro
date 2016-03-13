@extends('layouts.app')

@section('content')
    <div class="col-md-6">
        <h1>Ajout d'un parcours</h1>
        {!!Form::open(['route' => 'parcours.store','method'=>'POST', 'files'=> true]) !!}

        <div class="form-group">
            {!!Form::label('label', 'Diplôme ') !!}
            {!!Form::text('diplome', null, ['class' => 'form-control','id' =>'diplome']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('label', 'Année obtention') !!}
            {!!Form::text('annee', null, ['class' => 'form-control','id' =>'annee']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('label', 'Description ') !!}
            {!!Form::textarea('description', null, ['class' => 'form-control','id' =>'desc']) !!}
        </div>


        <button class="btn btn-primary" id="btnEnvoyer">Ajouter</button>
        {!! Form::reset('Effacer') !!}
    </div>

@stop



@section('imageActivite')
    <div class="col-md-4">
        <img id="blah" src="#" alt="aperçu image" class="img" style="max-height: 300px;max-width: 300px"/>

        <div class="control-group">
            <div class="controls"style="float: right" >
                {!!Form::label('image', 'Image') !!}
                {!! Form::file('image',['class' => 'form-control','id' =>'imgInp']) !!}

                <p class="errors">{!!$errors->first('image')!!}</p>
                @if(Session::has('error'))
                    <p class="errors">{!! Session::get('error') !!}</p>
                @endif
            </div>
        </div>
        <div id="success"> </div>
        {!! Form::close() !!}
    </div>

@stop


@section('script')
    <script type="text/javascript">

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    </script>
@stop
