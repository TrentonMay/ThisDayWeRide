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
    <div class="container col-lg-offset-1 col-lg-6 col-md-6 col-sm-6 menu menuV4">
        <ul class="container col-lg-12 col-md-12 col-sm-12">
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("links/homeLink") ?>">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("Rides/index")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("links/bikesLink")?>">Bikes</a></li>
        </ul>
    </div>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12 sign-in">
    <div class="container col-lg-6 col-md-6 col-sm-6 col-lg-offset-3 col-lg-offset-3 col-lg-offset-3">
        <form class="form-horizontal">
            <h3 class="text-center">Admin Sign In</h3>
            <div class="container col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
                <input type="text" class="form-control form1-margin" id="username" placeholder="Username">
                <input type="password" class="form-control form1-margin" id="password" placeholder="Password">
                <button type="submit" class="btn btn-primary submit form1-margin col-lg-12 col-md-12 col-sm-12">Sign In</button>
            </div>
        </form>
    </div>
</div>

</div>

<footer class="container col-lg-12 col-md-12 col-sm-12">
    <div class="container col-lg-12 col-md-12 col-sm-12">
        <ul class="container-fluid">
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-1"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Google-plus.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-2"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Facebook.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-2"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Twitter.png"></li>
            <li class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-2"><img class="img-responsive img-rounded" src="<?php echo base_url() ?>assets/tools/Reddit.png"></li>
        </ul>
    </div>
</footer>

</body>
</html>