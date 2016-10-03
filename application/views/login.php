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
    <div class="container col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-lg-8 col-md-8 col-sm-8 col-xs-8 menu">
        <ul class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("links/homeLink") ?>">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Rides/index")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Bikes/index")?>">Bikes</a></li>
        </ul>
    </div>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12 sign-in">
    <div class="container col-lg-6 col-md-6 col-sm-6 border-right">
        <form class="form-horizontal" method="post" action="<?php echo site_url('login')?>">
            <h3 class="text-center">Sign In</h3>
            <div class="container col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
                <input type="text" class="form-control form1-margin" id="username" name="username" placeholder="Username">
                <input type="password" class="form-control form1-margin" id="password" name="password" placeholder="Password">
                <button type="submit" class="btn btn-primary submit form1-margin col-lg-12 col-md-12 col-sm-12">Sign In</button>
            </div>
        </form>
    </div>
    <div class="container col-lg-6 col-md-6 col-sm-6">
        <form class="form-horizontal" action="<?php echo site_url('signup')?>" method="post">
            <h3 class="text-center">Sign Up</h3>
            <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
                <input class="form-control form1-margin" type="text" id="username" name="username" placeholder="Username">
            </div>
            <div class="container  col-lg-5 col-md-5 col-sm-5 right">
                <input class="form-control form1-margin" type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="container  col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
                <input class="form-control form1-margin" type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="container col-lg-5 col-md-5 col-sm-5 right">
                <button type="submit" class="btn btn-primary submit col-lg-12 col-md-12 col-sm-12 form1-margin">Sign Up</button>
            </div>
        </form>
    </div>
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