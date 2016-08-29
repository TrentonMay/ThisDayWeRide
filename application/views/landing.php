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
<div class="container-fluid banner">
    <img src="<?php echo base_url();?>assets/Banners/logo.png" class="img-responsive">
    <div class="container col-lg-offset-1 col-lg-6 col-md-6 col-sm-6 menu">
        <ul class="container col-lg-12 col-md-12 col-sm-12">
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Sign In</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#">Bikes</a></li>
        </ul>
    </div>
</div>

<div class="container col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/Rides/Ride1.jpg" alt="Rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="assets/Rides/Ride2.jpg" alt="Rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="assets/Rides/Ride3.jpg" alt="Rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="assets/Rides/Ride4.jpg" alt="Rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="assets/Rides/Ride5.jpg" alt="Rides">
                <div class="carousel-caption">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container col-lg-5 col-md-5 col-sm-12 home-rides col-lg-offset-1">
        <h3>Latest Motorcycle Rides</h3>
        <ul class="container-fluid">
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Rides/Ride1.jpg"></li>
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Rides/Ride2.jpg"></li>
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Rides/Ride5.jpg"></li>
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Rides/Ride6.jpg"></li>
        </ul>
    </div>

    <div class="container col-lg-5 col-md-5 col-sm-12 home-bikes">
        <h3>Latest Shared Bikes</h3>
        <ul class="container-fluid">
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Bikes/Bike1.jpg"></li>
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Bikes/Bike2.jpg"></li>
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Bikes/Bike3.jpg"></li>
            <li class="col-lg-6"><img class="img-responsive img-thumbnail" src="assets/Bikes/Bike4.jpg"></li>
        </ul>
    </div>
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