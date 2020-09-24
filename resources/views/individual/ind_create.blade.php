<!DOCTYPE html>
<html lang="en">

<head>
    <title>INDIVIDUAL REG</title>
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
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            /*margin: 0;*/
            background-image: url('storage/white1.jpg');
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
        <div>
            <img src="{{ url('storage/logo.png') }}" height="90" width="180">
            <h2>INDIVIDUAL REGISTRATION</h2>
        </div><br>

                <h3>ENTER SERVICE DETAILS</h3>
                <form method="post" action="{{url('individualsp')}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
                {{ csrf_field() }}

                @include('inc.messages')
                <div class="form-group row">
                        <label for="bs_name" class="col-sm-2 col-form-label">Business Name:</label>
                        <div class="col-sm-10">
                            <input type="text" id="bs_name" value="bs_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="bs_description">Business Description:</label>
                            <textarea class="form-control" id="bs_description" value="bs_description" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="price">Choose Currency Type:</label>
                            <select name="currency">
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
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="price">Charges per Hour:</label>
                            <input type="number" class="form-control" id="price" value="price" placeholder="Price" min=0.00 max=10000.00 step=0.01 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contactNo" class="col-sm-2 col-form-label">Contact No:</label>
                        <div class="col-sm-10">
                            <input type="text" id="contactNo" value="contactNo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="upload">Upload Photo</label>
                            <input type="file" class="form-control-file" id="upload" value="photo" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </form>

            </div>
           
        </div>
    </div>

</body>

</html>