<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    <script src="<?php echo base_url();?>js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/main.js" type="text/javascript"></script>
    <title></title>
</head>
<body>
<div class="container-fluid banner-v2">
    <img src="<?php echo base_url();?>assets/Banners/logo.png" class="img-responsive col-lg-2 col-md-2 col-sm-2 left logo">
    <div class="container col-lg-6 col-md-6 col-sm-6 menu menuV2">
        <ul class="container col-lg-12 col-md-12 col-sm-12">
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php site_url("links/homeLink") ?>">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php site_url("links/loginLink") ?>">Sign In</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php site_url("links/ridesLink")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php site_url("links/bikesLink")?>">Bikes</a></li>
        </ul>
    </div>
    <div class="container col-lg-12 col-md-12 col-sm-12 search">
        <form class="form-inline col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
            <div class="form-group">
                <label for="stateinput" id="statelabel">Search For Rides</label>
                <input type="text" class="form-control" id="stateinput" placeholder="State">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="zipinput" placeholder="Zipcode">
            </div>
            <button type="submit" class="btn btn-primary submit">Submit</button>
            <button type="button" class="btn create">Create A Ride</button>

        </form>
    </div>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12 user-cont">
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <li class="col-lg-4 col-md-4 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride1.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-plus"></span>
        </li>
        <li class="col-lg-4 col-md-4 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride2.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-plus"></span>
        </li>
        <li class="col-lg-4 col-md-4 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride3.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-plus"></span>
        </li>
        <li class="col-lg-4 col-md-4 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride4.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-plus"></span>
        </li>
        <li class="col-lg-4 col-md-4 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride5.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-plus"></span>
        </li>
        <li class="col-lg-4 col-md-4 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride6.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-plus"></span>
        </li>
    </ul>
</div>

<footer class="container col-lg-12 col-md-12 col-sm-12">
    <div class="container col-lg-12 col-md-12 col-sm-12">
        <ul class="container-fluid">
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-1"><img class="img-responsive img-rounded" src="assets/tools/Google-plus.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-2"><img class="img-responsive img-rounded" src="assets/tools/Facebook.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-2"><img class="img-responsive img-rounded" src="assets/tools/Twitter.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-2"><img class="img-responsive img-rounded" src="assets/tools/Reddit.png"></li>
        </ul>
    </div>
</footer>

</body>
</html>