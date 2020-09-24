<!DOCTYPE html>
<html lang="en">

<head>
    <title>INDIVIDUAL SP EDIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <h2 style="text-align:center;">EDIT SERVICE DETAILS</h2>


    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}} </p>
    </div>
    @endif

    <form method="post" action="{{action('MalepackinglistController@update', $id)}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH" />
      
       

        <div class="form-group">
            <button type="submit" class="btn btn-primary">EDIT</button>
        </div>
    </form>
</div>
</body>

</html>