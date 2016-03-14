@extends('layouts.app')

@section('content')
    <style>
        .projecto{
            height:500px;
        }
        .projecto p{
            height:140px;
            overflow:hidden;

        }
        .projecto img{
            max-width:300px;
            max-height:300px;

        }

    </style>
    <h1>Les projets</h1>
        @if (Illuminate\Support\Facades\Auth::check())
        <p><a class="btn btn-primary" href="{{ route('projets.create') }}">Ajouter un projet</a></p>
        @endif
    <div class="row">

            @foreach($projets as $projet)

                    <!--  <div class="thumbnail" style="width:300px;display: inline-block;vertical-align: top">-->
        <div class="col-md-4">
            <div class="thumbnail projecto">
                <img src="{!! URL::asset('images/'.$projet->image) !!}" alt="img_projet" class="img img*responsive">
                <div class="caption">
                    <h3><a href="{{$projet->lien}}" target="_blank">{{$projet->nom}}</a></h3>
                    <p style="text-align: justify">{{$projet->description}}</p>
                  <div class="row">
                      <div class="col-md-6">
                          <p><a href="{{route('projets.show',$projet->id)}}" class="btn btn-info" role="button">Plus d'infos</a></p>
                      </div>
                      @if (Illuminate\Support\Facades\Auth::check())
                      <div class="col-md-6">
                          {!! Form::open(array('route' => array('projets.destroy', $projet->id), 'method' => 'delete')) !!}
                          <button type="submit"  class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer ce projet ?');">Supprimer</button>
                          {!! Form::close() !!}
                      </div>
                      @endif
                  </div>




                </div>
            </div>
        </div>
            @endforeach



    </div>


 @endsection