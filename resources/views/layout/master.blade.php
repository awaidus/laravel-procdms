<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{asset('bower/bootstrap/dist/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('bower/font-awesome/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>


    <script src={{asset('bower/jquery/dist/jquery.min.js')}}></script>
    <script src={{asset('bower/bootstrap/dist/js/bootstrap.min.js')}}></script>
    <script src={{asset('bower/angular/angular.min.js')}}></script>
    <script src={{asset('bower/angular-animate/angular-animate.min.js')}}></script>

    <script src={{asset('angularApp/app.js')}}></script>
    <script src={{asset('angularApp/controllers/orderCtrl.js')}}></script>


    <title>Proc-DMS</title>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars" aria-hidden="true"></span>
            </button>
            {{--{{link_to_route('home', 'Proc-DMS', null, ['class' => 'navbar-brand'] )}}--}}
            <a href={{route('home')}} class="navbar-brand">
                <i class="fa fa-home fa-lg" aria-hidden="true"></i> Procurement DMS</a>
        </div> {{--navbar-header--}}

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">New Company</a></li>
            </ul>

            <div class="navbar-form navbar-right">
                <a href="#" class="btn btn-info">
                    <i class="fa fa-list" aria-hidden="true"></i>To Do List
                    <span class="badge">11</span>
                </a>
            </div>

        </div><!--/.navbar-collapse -->
    </div>
</nav>
<div class="container">

    @yield('content')

</div>

</body>
</html>
