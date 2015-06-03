<!DOCTYPE html>
<html>

    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Images :: Kettering Media</title>

    </head>

    <body>
        <div class="text-center container">

            <img class="img-responsive" src="http://i.imgur.com/LWkM7tM.png" alt="Responsive image">


            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/video') }}">Videos</a></li>
                            <li class="active"><a href="{{ url('/image') }}">Images</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if(Auth::guest())
                                <li><a href="{{ url('/auth/login') }}" >Login</a></li>
                                <li><a href="{{ url('/auth/register') }}" >Sign Up</a></li>
                            @else
                                <li><a href="{{ url('/submit') }}">Submit</a></li>
                                <li><a href="#" >{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            @for($i = 0; $i < count($media); $i++)

                <div class="well">

                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $media[$i]->embed !!}
                    </div>

                    <a href="/view_media/{{ $media[$i]->id }}"><h3>{{ $media[$i]->title }}</h3></a>
                    <h4>Submitted by: {{ $media[$i]->username }}</h4>

                </div>

            @endfor



        </div>
    </body>

</html>