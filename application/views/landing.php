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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84942804-1', 'auto');
        ga('send', 'pageview');

    </script>
    <title></title>
</head>
<body>
<?php $session = $this->session->userdata('logged_in') ?>
<div class="container-fluid banner">
    <img src="<?php echo base_url();?>assets/Banners/logo.png" class="img-responsive">
    <div class="container col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-lg-6 col-md-6 col-sm-6 col-xs-12 menu">
        <ul class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("links/homeLink") ?>">Home</a></li>
            <?php
            if($session === true){
                echo '<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 dropdown" role="presentation">';
                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Stuff</a>';
                echo '<ul class="dropdown-menu">';
                echo "<li><a href='".site_url("Rides/userDash")."'>Dashboard</a></li>";
                echo "<li><a href='".site_url("login/Logout")."'>Logout</a></li>";
                echo '</ul>';
                echo '</li>';
            }else{
                echo '<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">';
                echo "<a href='".site_url("links/loginLink")."''>Sign In</a>";
                echo '</li>';
            }
            ?>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Rides/index")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Bikes/index")?>">Bikes</a></li>
        </ul>
    </div>
</div>

<div class="container col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-12 slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url();?>assets/Banners/home1.jpg" alt="Let us help you find the best rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/Banners/home2.jpg" alt="Let us help you find the best rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/Banners/home3.jpg" alt="Let us help you find the best rides">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/Banners/home4.jpg" alt="Let us help you find the best rides">
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
    <div class="container col-lg-5 col-md-5 col-sm-12 col-xs-12 home-rides col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <h3>Latest Motorcycle Rides</h3>
        <ul class="container-fluid">
            <?php
            if(isset($ridesArray)){
                foreach($ridesArray as $out){
                    echo "<li class='col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-12'>";
                    echo "<img class='img-responsive img-thumbnail' src='". base_url(). "userRides/".$out['image']."''/>";
                    echo "</li>";
                }
            }
            ?>
        </ul>
    </div>

    <div class="container col-lg-5 col-md-5 col-sm-12 col-xs-12 home-bikes">
        <h3>Latest Shared Bikes</h3>
        <ul class="container-fluid">
            <?php
            if(isset($bikesArray)){
                foreach($bikesArray as $out){
                    echo "<li class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>";
                    echo "<img class='img-responsive img-thumbnail' src='". base_url(). "userBikes/".$out['image']."''/>";
                    echo "</li>";
                }
            }
            ?>
        </ul>
    </div>
</div>

<footer class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="container-fluid">
            <li class="col-lg-1 col-md-1 col-sm-1 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Google-plus.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-xs-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Facebook.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-xs-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Twitter.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-xs-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Reddit.png"></li>
        </ul>
    </div>
</footer>

</body>
</html>