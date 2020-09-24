<!DOCTYPE html>
<html lang="en">

<head>
    <title>INDIVIDUAL SP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            background-image: url('/images/plane2.jpg');
            background-color: powderblue;
            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
            opacity: 90%;
        }
    </style>
</head>
<div>
    <img src="{{ url('/images/logo.png') }}" alt="Image" height="90px" width="180px" />
    <img src="{{ url('/images/individualicon.png') }}" alt="Image" height="90px" width="120px" />
</div>

<nav class="navbar navbar-dark bg-primary"">
  <div class=" container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;">INDIVIDUAL SERVICE PROVIDER</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('individualsp.create')}}" style="color:white;"><b>Register Service</b></a></li>
        <li><a href="{{route('individualsp.index')}}" style="color:white;"><b>View Service</b></a></li>
        <li><a href="#" style="color:white;"><b>View Ratings and Comments</b></a></li>
    </ul>
    <form class="navbar-form navbar-left">
        <input class="form-control" id="myInput" type="text" placeholder="Search.."><i class="glyphicon glyphicon-search"></i>

    </form>
    </div>
</nav>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align:center; color:papayawhip;">REGISTERED SERVICE </h3>
                <br />

                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}} </p>
                </div>
                @endif
                <div style="text-align:right; margin:5px; color:white;">
                    <button class="btn btn-primary"><a href="{{route('individualsp.create')}}" style="color:white;">ADD SERVICE</a></button>
                </div>
                <div align="right">

                    <table class="table table-bordered">
                        <thead style="background-color:peachpuff;">
                            <tr>
                                <th>Business Name</th>
                                <th>Business Description</th>
                                <th>Currency</th>
                                <th>Price</th>
                                <th>Business Email</th>
                                <th>Business Photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="myTable" style="color:white;">
                            @foreach($individualsps as $row)
                            <tr>
                                <td><b>{{$row['bs_name']}}</b></td>
                                <td><b><i>{{$row['bs_description']}}</i></b></td>
                                <td><b>{{$row['currency']}}</b></td>
                                <td><b>{{$row['price']}}</b></td>
                                <td><b>{{$row['bs_email']}}</b></td>
                                <td><img src="{{ asset('/individualsps/' . $row['image'])}}" width="100px;" height="100px;" alt="image"></td>
                                <td><a href="{{action('IndividualspController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="post" class="delete_form" action="{{action('IndividualspController@destroy',$row['id'])}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <script>
            $(document).ready(function() {
                $('.delete_form').on('submit', function() {
                    if (confirm("Are You Sure You Want To Delete It?")) {
                        return true;
                    } else {
                        return false;
                    }
                });
            });

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>


</body>

</html>