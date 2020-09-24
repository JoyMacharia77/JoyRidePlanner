<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINING SP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
             color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            background-image: url('/images/dining1.jpg');
            background-color: powderblue;
            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <br />
                <h3 align="center">Registered Service </h3>
                <br />

                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}} </p>
                </div>
                @endif

                <div align="right">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Business Name</th>
                                <th>Business Description</th>
                                <th>Business Email</th>
                                <th>Business Photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($diningsps as $row)
                            <tr>
                                <td>{{$row['bs_name']}}</td>
                                <td>{{$row['bs_description']}}</td>
                                <td>{{$row['bs_email']}}</td>
                                <td><img src="{{ asset('/diningsps/' . $row['image'])}}" width="100px;" height="100px;" alt="image"></td>
                                <td><a href="{{action('DiningspController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="post" class="delete_form" action="{{action('DiningspController@destroy',$row['id'])}}">
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