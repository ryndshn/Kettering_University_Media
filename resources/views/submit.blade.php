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
        <title>Submit :: Kettering Media</title>

        <script type="text/javascript">

            function startup() {

                $("#btnVerify").bind("click", function() { validateEmbedLink() });

            }

            function validateEmbedLink() {

                var fieldToValidate = $("#url").val();

                var title = $("#title").val();

                var validatePattern = new RegExp(/https:\/\/www\.youtube\.com\/embed\//);

                var validatePatternT = new RegExp(/\/\/imgur.com/);

                if (title == "") {

                    alert("Please enter title.")

                } else if (fieldToValidate == "") {

                    alert("Please enter an embed link");

                } else {

                    if (validatePattern.test(fieldToValidate)) {

                        //valid embed link
                        $("#form").submit();

                    } else if (validatePatternT.test(fieldToValidate)) {

                        //valid embed link
                        $("#form").submit();

                    }
                    else {

                        //invalid embed link
                        alert("Please enter a valid embed link");

                    }

                }

            }

            window.addEventListener("load", startup, false);
        </script>


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
                            <li><a href="{{ url('/image') }}">Images</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if(Auth::guest())
                                <li><a href="{{ url('/auth/login') }}" >Login</a></li>
                                <li><a href="{{ url('/auth/register') }}" >Sign Up</a></li>
                            @else
                                <li class="active"><a href="{{ url('/submit') }}">Submit</a></li>
                                <li><a href="#" >{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            @if(!$result)
            <form role="form" id="form" method="POST" action="{{ url('/submit') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                <div class="form-group">
                    <label>YouTube or Imgur Embed</label>
                    <input type="text" class="form-control" name="url" id="url">
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control" name="subject" id="subject">
                        <option value="video">Video</option>
                        <option value="image">Image</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="button" id="btnVerify" name="btnVerify">Submit</button>

                </div>
            </form>
            @elseif($result)
                <div class="alert alert-success" role="alert">
                    Submitted Successfully!
                </div>
            @endif


        </div>
    </body>

</html>