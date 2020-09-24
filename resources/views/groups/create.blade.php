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
            <h2>GROUP SERVICE REGISTRATION</h2>
        </div><br>

        <form method="post" action="/groups" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <!--  <label for="staticBusinessName" class="col-sm-2 col-form-label">Business Name:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticBusinessName" value="CurrentBusinessName">
                        </div>
                    </div>-->
                <div class="form-group row">
                    <label for="CurrentBusinessName" class="col-sm-3 col-form-label">Business Name:</label>
                    <div class="col-sm-10">
                        <input name="CurrentBusinessName" type="text" class="form-control" id="CurrentBusinessName" placeholder="Business Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">9
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
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
                        <label for="price_per_hr">Charges per Hour:</label>
                        <input name="price_per_hr" type="number" class="form-control" id="price_per_hr" placeholder="Price" min=0.00 max=10000.00 step=0.01 required>
                    </div>
                </div>
                <fieldset class="form-group row">
                        <div class="row">
                            <legend class="col-form-label col-sm-10 pt-0">Available:</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="gridRadios1" value="yes" >
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="gridRadios2" value="no" >
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                            </legend>
                        </div>
                    </fieldset>
                <!--<div class="form-group row">
                    <label for="staticBusinessName" class="col-sm-2 col-form-label">Contact No:</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticContactNo" value="BusinessContactNo" required>
                    </div>
                </div>-->
                <div class="form-group row">
                    <label for="contactNo" class="col-sm-3 col-form-label">Contact No:</label>
                    <div class="col-sm-10">
                        <input name="contactNo" type="text" class="form-control" id="contactNo" placeholder="Contact Number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="photo">Upload Photo</label>
                        <input name="photo" type="file" class="custom-file-input" id="upload" required>
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-10">
                        <button type="submit" class="btn btn-primary">REGISTER</button>
                    </div>
                </div>
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