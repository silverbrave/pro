<!DOCTYPE html>
<html lang="en" xmlns:float="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur mon site personnel regroupant mes différents projets réalisés">
    <meta name="author" content="Florian PALABOST">

    <title>Site Personnel - Florian PALABOST - @yield('titre')</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>

  @yield('csse')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            background-color: rgba(105,105,105,0.5);
            font-size: 16px;
            font-family: sans-serif;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
        #bs-example-navbar-collapse-1 ul li{
            text-align: center;
        }
        .footer {
            //float: left;

            bottom: 0;

            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: black;
        }
        .footer p{
            text-align:center;
        }
        #main{
            background-color: white;
            min-height: 100%;
        }
        .navbar-fixed-top .nav {
            padding: 15px 0;
        }

        .navbar-fixed-top .navbar-brand {
            padding: 0 15px;
        }
        #logo{
            width:80px;
        }
        .navbar-bottom {
            min-height: 300px;
            margin-top: 100px;
            margin-bottom: 0;
            background-color: #28364f;
            padding-top: 35px;
            color:#FFFFFF;
            text-align: center;
        }
        .logo_footer{
            width:50px;
        }

        .navbar-inverse{
        background-color: rgba(0,0,0,0.7);
        }

        @media(min-width:768px) {
            body {
                padding-top: 100px; /* Required padding for .navbar-fixed-top. Change if height of navigation changes. */
            }

            .navbar-fixed-top .navbar-brand {
                padding: 15px 0;
            }
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->


    @yield('script')
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src = "{{ asset('images/logo.png') }}" alt ="logo" class="img img-responsive" id="logo"/></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}" style="float: right">Accueil</a>
                </li>
                 <li>
                    <a href="{{ url('/projets') }}" style="float: right">PortFolio</a>
                </li>
                 <li>
                    <a href="{{ url('/parcours') }}" style="float: right">Parcours</a>
                </li>
                <li>
                    <a href="{{ url('/competences') }}" style="float: right">Compétences</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" style="float: right">Contact </a>
                </li>
                @if (Illuminate\Support\Facades\Auth::check())

                    <li><a href="{{ url('/logout') }}" style="float: right"><i class="fa fa-btn fa-sign-out"></i>Se déconnecter</a></li>
                @else
                    <li><a href="{{ url('/login') }}" style="float: right">Se connecter</a></li>


                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container" id="main">
    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>

         @yield('content')
        @yield('imageActivite')

    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>
    <!-- /.row -->
</div>
<footer class="navbar navbar-bottom">
    <div class="container">
        <p class="text-muted">Produit avec Laravel 5.2 .</p>
        <h3>Réseaux Sociaux</h3>
        <a href="https://www.linkedin.com/in/florian-palabost-881711b4" target="_blank"><img src="{{asset('images/in.png')}}" alt="logo_linkedin"  class="logo_footer img img-responsive"></a>
    </div>
</footer>

<!-- /.container -->

<!-- jQuery Version 1.11.1 -->
<!-- Bootstrap Core JavaScript -->
@yield('script')

</body>
</html>
