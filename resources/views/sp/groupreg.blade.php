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
            <h2>GROUP SERVICE REGISTRATION</h2>
        </div><br>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#reg"><b>REGISTER SERVICE</b></a></li>
            <li><a data-toggle="tab" href="#details"><b>VIEW SERVICE DETAILS</b></a></li>
            <li><a data-toggle="tab" href="#ratings"><b>VIEW RATINGS</b></a></li>
            <li><a data-toggle="tab" href="#comments"><b>VIEW COMMENTS</b></a></li>
            <li><a data-toggle="tab" href="#logout" style="color:red;"><b>LOGOUT</b></a></li>
        </ul>

        <div class="tab-content">
            <div id="reg" class="tab-pane fade in active">
                <h3>ENTER SERVICE DETAILS</h3>
                <form>
                    <div class="form-group row">
                        <label for="staticBusinessName" class="col-sm-2 col-form-label">Business Name:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticBusinessName" value="CurrentBusinessName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
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
                        <input type="number" class="form-control" id="price" placeholder="Price" min=0.00 max=10000.00 step=0.01 required>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticBusinessName" class="col-sm-2 col-form-label">Contact No:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticContactNo" value="BusinessContactNo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="upload">Upload Photo</label>
                        <input type="file" class="form-control-file" id="upload" required>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </form>

            </div>
            <div id="details" class="tab-pane fade">
                <h3>SERVICE DETAILS</h3>
                <p>view,edit,delete</p>
            </div>
            <div id="ratings" class="tab-pane fade">
                <h3>RATINGS</h3>
                <p>All Traveller Ratings Of Businesses</p>
            </div>
            <div id="comments" class="tab-pane fade">
                <h3>COMMENTS</h3>
                <p>All Customer Comments</p>
            </div>
            <div id="logout" class="tab-pane fade">
                <h3>LOGOUT</h3>
                <p>Change to Link</p>
            </div>
        </div>
    </div>

</body>

</html>