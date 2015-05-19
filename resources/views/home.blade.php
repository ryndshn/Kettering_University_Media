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
        <title>Home :: Kettering Media</title>

    </head>

    <body>
        <div class="text-center container">sdf

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
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Images</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="submit_demo.html">Submit</a></li>
                            @if(Auth::guest())
                                <li><a href="{{ url('/auth/login') }}" >Login</a></li>
                                <li><a href="{{ url('/auth/register') }}" >Sign Up</a></li>
                            @else
                                <li><a href="#" >{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="video_demo.html"> <img src="http://img.youtube.com/vi/hWRC_6cdszo/maxresdefault.jpg" alt="..."> </a>
                        <div class="caption">
                            <a href="video_demo.html" ><h3>Kettering University's FIRST Robotics Community Center In Action</h3></a>
                            <p>VIDEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="image_demo.html"> <img src="http://i.imgur.com/OXxH6eb.jpg" alt="..."></a>
                        <div class="caption">
                            <a href="image_demo.html" ><h3>Kettering Vehicles</h3></a>
                            <p>PHOTO ALBUM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>
