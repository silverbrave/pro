@extends('layouts.app')

    @section('content')
        <div class="col-md-6">
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
            {!!Form::label('label', 'Description ') !!}
            {!!Form::textarea('description', null, ['class' => 'form-control','id' =>'desc']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('label', 'Compétences ') !!}
            {!!Form::text('competences', null, ['class' => 'form-control','id' =>'competences']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('label', 'Lien * (localhost sinon)') !!}
            {!!Form::text('lien', null, ['class' => 'form-control','id' =>'lien']) !!}
        </div>

        <button class="btn btn-primary" id="btnEnvoyer">Ajouter le projet</button>
        {!! Form::reset('Effacer') !!}
</div>

    @stop



    @section('imageActivite')
        <div class="col-md-4">
        <img id="blah" src="{!! URL::asset('images/troll.png') !!}" alt="aperçu image" class="img" style="max-height: 300px;max-width: 300px"/>

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
        $(function () {
            $('#datetimepicker1').datetimepicker({
            });
            $('#datetimepicker2').datetimepicker({
            });
        });
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
