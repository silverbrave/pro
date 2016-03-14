@extends('layouts.app')

@section('content')
    <style>
        .logos{
            width: 50px;
            height: 50px;
        }
    </style>
    <h2>Mes Compétences</h2>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>
    <div class="col-md-4" style="background-color: rgba(255,0,0,0.5);margin:5px;min-height: 150px;text-align: center">
        <h3>LANGAGES - FRAMEWORK</h3>
        <img src="{{asset('images/logo/php-logo.png')}}" alt="logo php" class="logos">
        <img src="{{asset('images/logo/java.png')}}" alt="logo java" class="logos">
        <img src="{{asset('images/logo/javaeEE.png')}}" alt="logo javaEE" class="logos">
        <img src="{{asset('images/logo/js.png')}}" alt="logo js" class="logos">
        <img src="{{asset('images/logo/htmlcss.png')}}" alt="logo htmlcss" class="logos">
        <img src="{{asset('images/logo/sql.png')}}" alt="logo sql" class="logos">
        <img src="{{asset('images/logo/c++.png')}}" alt="logo c++" class="logos">

    </div>
    <div class="col-md-4" style="background-color:rgba(229,130,17,0.5);margin:5px;min-height: 150px;text-align: center">
        <h3>OUTILS</h3>
        <img src="{{asset('images/logo/git.png')}}" alt="logo git" class="logos">
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>
</div>
   <div class="row">
       <div class="col-sm-1"></div>
       <div class="col-sm-1"></div>
    <div class="col-md-4" style="background-color: rgba(17,73,229,0.5);margin:5px;min-height: 150px;text-align: center">
        <h3>SYSTEMES D'EXPLOITATION</h3>
        <img src="{{asset('images/logo/windows.png')}}" alt="logo windows" class="logos">
        <img src="{{asset('images/logo/linux.png')}}" alt="logo linux" class="logos">

    </div>
    <div class="col-md-4" style="background-color: rgba(20,238,34,0.5);margin:5px;min-height: 150px;text-align: center">
        <h3>LOGICIELS</h3>
        <img src="{{asset('images/logo/PhpStorm.ico')}}" alt="logo phpstorm" class="logos">
        <img src="{{asset('images/logo/netbeans.png')}}" alt="logo netbeans" class="logos">
        <img src="{{asset('images/logo/photo.jpg')}}" alt="logo photoshop" class="logos">

    </div>
       <div class="col-sm-1"></div>
       <div class="col-sm-1"></div>
</div>

@endsection