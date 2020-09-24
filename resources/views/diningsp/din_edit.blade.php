<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINING SP EDIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
        html,
        body {
            background-image: radial-gradient(white 80%, peachpuff 20%);
        }
    </style>
</head>

<body>
<div class="container">

    <h2 style="text-align:center;">EDIT SERVICE DETAILS</h2>


    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}} </p>
    </div>
    @endif

    <form method="post" action="{{action('DiningspController@update', $id)}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH" />
      
        <div class="form-group">
        <label>Business Name:</label>
            <input name="bs_name" type="text" class="form-control" id="bs_name" value="{{$diningsp->bs_name}}" placeholder="Business Name" required>
        </div>

        <div class="form-group ">
        <label>Business Description:</label>
            <input name="bs_description" type="text" class="form-control" id="bs_description" value="{{$diningsp->bs_description}}" placeholder="Business Description" required>
        </div>

        <div class="form-group ">
        <label>Business Email:</label>
            <input name="bs_email" type="text" class="form-control" id="bs_email" value="{{$diningsp->bs_email}}" placeholder="Business Email" required>
        </div>

        <label for="image">Upload Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload" name='image' value="{{$diningsp->bs_email}}" >
                    </div>
                </div>
                <br><br>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">EDIT</button>
        </div>
    </form>
</div>
</body>

</html>