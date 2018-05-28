<!DOCTYPE html>
    <head>
        <title>Laravel CRUD application</title>
        <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" type="text/css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css"/>
        <script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AraSoft</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{url('/create')}}">Create</a></li>
                    </ul>
                </div>                
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(\Auth::guest())
                        <li><a href="{{ url('/user/create') }}">Register</a></li>
                        <li><a href="{{ url('/login') }}">Sign In</a></li>
                    @else
                        <li><a href="#">Welcome, {{ \Auth::user()->name }}</a></li>
                        
                        <li><a href='{{ url("/logout") }}'>Sign Out</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </nav>
        