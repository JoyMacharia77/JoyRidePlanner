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

<body>
    <div>
        <img src="{{ url('/images/logo.png') }}" alt="Image" height="90px" width="180px" style=" left:0px;"/>
        <img src="{{ url('/images/groupicon.jpg') }}" alt="Image" height="90px" width="120px" style=" left:0px;"/>
    </div>

    <nav class="navbar navbar-dark bg-primary"">
  <div class=" container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color:white;">GROUP SERVICE PROVIDER</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('groupsp.create')}}" style="color:white;"><b>Register Service</b></a></li>
            <li><a href="{{route('groupsp.index')}}" style="color:white;"><b>View Service</b></a></li>
            <li><a href="#" style="color:white;"><b>View Ratings and Comments</b></a></li>
        </ul>
        <form class="navbar-form navbar-left">
            <input class="form-control" id="myInput" type="text" placeholder="Search.."><i class="glyphicon glyphicon-search"></i>

        </form>
        </div>
    </nav>

    <div class="container">

        <h3 style="text-align:center; color:papayawhip;">ENTER SERVICE DETAILS</h3>
        <form method="post" action="{{url('groupsp')}}" enctype="multipart/form-data" style="margin:auto;   border: 1px solid black;  border-radius: 50px 20px; padding-top:20px; padding-left:38%; ">
            {{ csrf_field() }}

            @include('inc.messages')
            

            <div class="form-group">
                <label for="bs_name">Business Name:</label>
                <input style="width:50%;"  type="text" class="form-control" name="bs_name" id="bs_name" required>
            </div>

            <div class="form-group">
                <label for="bs_description">Business Description:</label>
                <textarea style="width:50%;"  class="form-control" name="bs_description" id="bs_description" rows="3" required></textarea>
            </div>

            <div class="form-group">
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

            <div class="form-group">
                <label for="price">Charges per Hour:</label>
                <input  style="width:50%;" type="number" class="form-control" name="price" id="price" min=0.00 max=10000.00 step=0.01 required>
            </div>


            <div class="form-group">
                <label for="bs_email">Business Email:</label>
                <input style="width:50%;" type="email" class="form-control" name="bs_email" id="bs_email" required>
            </div>

            <label for="image">Upload Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input   type="file" class="custom-file-input" id="upload" name='image'>
                </div>
            </div>
            <br><br>

            <button type="submit" class="btn btn-primary">REGISTER</button>
        </form>

    </div>

    </div>
    </div>

</body>

</html>