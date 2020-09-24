<!DOCTYPE html>
<html lang="en">

<head>
    <title>GROUP REG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            /*background-color: #fff;*/
            color: #636b6f;
            /* color:seashell;*/
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            /*margin: 0;*/
            background-image: url('storage/white2.jpg');
            background-color: white;

            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
        }
    </style>
</head>

<body>


    <div class="container">
        <div>
            <img src="{{ url('storage/logo.png') }}" height="90" width="180">
            <h2>DISPLAY</h2>
        </div><br>
        <div class="card" style="width: 270px;margin: 5px">
            <img class="card-img-top" src="{{ Storage::url($group->photo)  }}" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">{{$group->CurrentBusinessName }}</h3>
                <p class="card-text">{{$group->currency}}</p> 
                <p class="card-text">{{$group->price_per_hr}}</p>
                <p class="card-text">{{$group->availability}}</p>
                <p class="card-text">{{$group->contactNo}}</p>
                <a href="/groups" class="btn btn-primary">List Groups</a>
            </div>
        </div>


</body>

</html>