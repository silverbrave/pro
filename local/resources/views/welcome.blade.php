@extends('layouts.app')



    @section('content')
        <div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>verif authentification</h2>
            @if (Illuminate\Support\Facades\Auth::check())
                <p>Vous etes connecté</p>
            @else
                <p>vous n etes pas co</p>
            @endif
            <div class="row">
                <div class="col-md-5">
                </div>
                <!--<div class="col-md-2">
                    <img src="{{asset('images/profil.png')}}" alt="photo_profil" class="img-circle"/>
                </div>
                <div class="col-md-3"></div>-->
            </div>

            <h2>A propos de moi </h2>
<p style ="text-align: justify">
    <?php
    include('aPropos.txt');
    ?>
</p>


        </div>

    </div>
</div>
@endsection
