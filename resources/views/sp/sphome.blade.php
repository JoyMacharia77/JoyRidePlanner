<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SP_HOME</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>
        html,
        body {
            /*background-color: #fff;*/
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            /*margin: 0;*/
            background-image: url('storage/plane2.jpg');
            background-color: powderblue;

            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
        }

        #logo {

            float: left;
            margin-left: 480px;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">JOYRIDE PLANNER</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                @auth

                <li> <a href="{{ url('/home') }}">Home</a></li>
                @else
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                @if (Route::has('register'))
                <li> <a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                @endif
                @endauth
                @endif
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2 style="color:black;">Go on an Adventure with Us!!!</h2>

    </div>


    <div class="container">
        <h3>Most Popular Destinations :</h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Nairobi" data-slide-to="0" class="active"></li>
                <li data-target="#Mombasa" data-slide-to="1"></li>
                <li data-target="#Naivasha" data-slide-to="2"></li>
            </ol>

        </div>
    </div>

    <ul>
        @foreach ($providers as $provider)
        <li>{{$provider}}</li>
        @endforeach
    </ul>


    <!--</div>-->
</body>

</html>