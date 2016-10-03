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
<?php $session = $this->session->userdata('logged_in') ?>
<div class="container-fluid banner-v4">
    <img src="<?php echo base_url();?>assets/Banners/logo.png" class="img-responsive col-lg-2 col-md-2 col-sm-2 hidden-xs left logo">
    <div class="container col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0  col-lg-6 col-md-6 col-sm-6 col-xs-12 menu">
        <ul class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("links/homeLink") ?>">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Users") ?>">Users</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Rides/adminRides")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="<?php echo site_url("Bikes/adminBikes")?>">Bikes</a></li>
        </ul>
    </div>
    <h3 class="right text-center dark-head">Welcome Admin</h3>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="text-center dark-head">User Bikes</h3>
</div>

<div class="container col-lg-offset-1 col-md-offset-1 col-sm-offset-3 col-xs-offset-2 col-lg-4 col-md-4 col-sm-6 col-xs-8 form-style form-style-v2 left">
    <form class='form-horizontal' enctype='multipart/form-data' action='<?php echo site_url('Bikes/adminAddBike')?>' method='post'>
        <h3 class="text-center dark-head">Share New Bike</h3>
        <div class='container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 left'>
            <input class='form-control form1-margin' type='text' id='model' name='model' placeholder='Bike Model'>
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 left">
            <input class="form-control form1-margin" type="text" id="username" name="username" placeholder="Username">
        </div>
        <div class='container col-lg-6 col-md-6 col-sm-6 col-xs-6  col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 left'>
            <input class='form-control form1-margin' type='file' id='userfile' name='userfile' placeholder='Choose Image'>
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 left">
            <button type="submit" class="btn btn-primary submit col-lg-12 col-md-12 col-sm-12 form1-margin">Submit</button>
        </div>
    </form>
</div>


<div class="container col-lg-7 col-md-7 col-sm-12 col-xs-12 user-cont right">
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
        <?php
        if(isset($bikesArray)){
            foreach($bikesArray as $out){
                echo '<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">';
                echo "<img class='img-responsive img-thumbnail' src='".base_url()."userBikes/".$out['image']."'>";
                echo "<p>".$out['username']."</p>";
                echo "<p>".$out['model']."</p>";
                echo "<a href='".base_url()."index.php/Bikes/deleteBike/".$out['bikeid']."/".$out['image']."'><span class='glyphicon glyphicon-remove'></span></a>";
                echo "<a href='".base_url()."index.php/Bikes/requestUpdateBike/".$out['bikeid']."'><span class='glyphicon glyphicon-wrench col-lg-offset-10 col-md-offset-10 col-sm-offset-10'></span></a>";
                echo '</li>';
            }
        }

        ?>
    </ul>
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