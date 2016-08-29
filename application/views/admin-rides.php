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
<div class="container-fluid banner-v4">
    <img src="<?php echo base_url();?>assets/Banners/logo.png" class="img-responsive col-lg-2 col-md-2 col-sm-2 left logo">
    <div class="container col-lg-6 col-md-6 col-sm-6 menu menuV5">
        <ul class="container col-lg-12 col-md-12 col-sm-12">
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Bikes</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Users</a></li>
        </ul>
    </div>
    <h3 class="right text-center dark-head">Welcome Admin</h3>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12">
    <h3 class="text-center dark-head">User Rides</h3>
</div>

<div class="container col-lg-4 col-md-4 col-sm-12 form-style form-pad left">
    <form class="form-horizontal">
        <h3 class="text-center dark-head">Create A Ride</h3>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
            <input class="form-control form1-margin" type="date" id="date">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 right">
            <input class="form-control form1-margin" type="time" id="time" placeholder="time">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
            <input class="form-control form1-margin" type="text" id="s-address" placeholder="Start Address">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 right">
            <input class="form-control form1-margin" type="text" id="s-city" placeholder="Start City">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
            <input class="form-control form1-margin" type="text" id="s-zip" placeholder="Start Zip">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 right">
            <input class="form-control form1-margin" type="text" id="s-state" placeholder="Start State">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
            <input class="form-control form1-margin" type="text" id="e-zip" placeholder="End Zip">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 right">
            <input class="form-control form1-margin" type="text" id="e-city" placeholder="End City">
        </div>
        <div class="container  col-lg-6 col-md-6 col-sm-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
            <input class="form-control form1-margin" type="file" id="file-upload" placeholder="Choose Image">
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
            <button type="submit" class="btn btn-primary submit col-lg-12 col-md-12 col-sm-12 form1-margin">Submit</button>
        </div>
    </form>
</div>


<div class="container col-lg-7 col-md-7 col-sm-12 user-cont right">
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <li class="col-lg-6 col-md-6 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride2.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-remove"></span>
            <span class="glyphicon glyphicon-wrench col-lg-offset-10 col-md-offset-10 col-sm-offset-10"></span>
        </li>
        <li class="col-lg-6 col-md-6 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride3.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-remove"></span>
            <span class="glyphicon glyphicon-wrench col-lg-offset-10 col-md-offset-10 col-sm-offset-10"></span>
        </li>
        <li class="col-lg-6 col-md-6 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride5.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-remove"></span>
            <span class="glyphicon glyphicon-wrench col-lg-offset-10 col-md-offset-10 col-sm-offset-10"></span>
        </li>
        <li class="col-lg-6 col-md-6 col-sm-6">
            <h3>Title Of Ride</h3>
            <img class="img-responsive img-thumbnail" src="assets/Rides/Ride6.jpg">
            <p>Date Time</p>
            <p>Starts At (Address City Zip)</p>
            <p>Ends At (City Zip)</p>
            <span class="glyphicon glyphicon-remove"></span>
            <span class="glyphicon glyphicon-wrench col-lg-offset-10 col-md-offset-10 col-sm-offset-10"></span>
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