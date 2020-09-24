<!DOCTYPE html>
<html lang="en">

<head>
    <title>GROUP SP EDIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
        html,
        body {
           /* background-color: peachpuff;*/
            background-image: radial-gradient(white 80%, peachpuff 20%);
        }
    </style>


<body>
<div class="container">

    <h2 style="text-align:center;">EDIT SERVICE DETAILS</h2>


    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}} </p>
    </div>
    @endif

    <form method="post" action="{{action('GroupspController@update', $id)}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH" />
      
        <div class="form-group">
        <label>Business Name:</label>
            <input name="bs_name" type="text" class="form-control" id="bs_name" value="{{$groupsp->bs_name}}" placeholder="Business Name" required>
        </div>

        <div class="form-group ">
        <label>Business Description:</label>
            <input name="bs_description" type="text" class="form-control" id="bs_description" value="{{$groupsp->bs_description}}" placeholder="Business Description" required>
        </div>

        <div class="form-group">
            <label for="price">Choose Currency Type:</label>
            <select name="currency" value="{{$groupsp->currency}}">
                <option value="ksh">Kenyan Shilling</option>
                <option value="ugx">Ugandan Shilling</option>
                <option value="mur">Mauritian Rupee</option>
                <option value="usd">US Dollar</option>
                <option value="cad">Canadian Dollar</option>
                <option value="bah">Bahamian Dollar</option>
                <option value="euro">Euro</option>
                <option value="pound">Pound Sterling</option>
                <option value="yen">Chinese Yuan</option>
                <option value="rupee">Japanese Yen</option>
                <option value="yuan">Indian Rupee</option>
            </select>
        </div>

        <div class="form-group ">
        <label>Price:</label>
            <input name="price" type="number" class="form-control" id="price" value="{{$groupsp->price}}" placeholder="Price" min=0.00 max=10000.00 step=0.01 required>
        </div>


        <div class="form-group ">
        <label>Business Email:</label>
            <input name="bs_email" type="text" class="form-control" id="bs_email" value="{{$groupsp->bs_email}}" placeholder="Business Email" required>
        </div>

        <label for="image">Upload Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload" name='image' value="{{$groupsp->image}}" >
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