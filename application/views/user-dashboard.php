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
    <div class="container col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0  col-lg-6 col-md-6 col-sm-6 col-xs-12 menu">
        <ul class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><a href="<?php echo site_url("links/homeLink") ?>">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><a href="<?php echo site_url("Rides/index")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><a href="<?php echo site_url("Bikes/index")?>">Bikes</a></li>
        </ul>
    </div>
    <h3 class="right text-center dark-head">Welcome Admin</h3>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 user-cont">
    <h3>These Are The Rides You've Saved</h3>
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        <?php
        if(isset($ridesArray)){
            foreach($ridesArray as $out){
                $date = date_timestamp_get(date_create($out['date'] . " " . $out['ridetime']));

                echo "<li class='col-lg-4 col-md-4 col-sm-6 col-xs-6'>";
                echo "<h3>".$out['title']."</h3>";
                echo "<img class='img-responsive img-thumbnail' src='". base_url(). "userRides/".$out['image']."''/>";
                echo "<p>".$out['date']." At " . date('h:ia',$date). "</p>";
                echo "<p>Starts At ".$out['StartAddress']." ".$out['StartCity']." ".$out['StartZip']." "."</p>";
                echo "<p>Ends At ".$out['EndCity']." ".$out['EndZipcode']."</p>";
                echo "<a href='".base_url()."index.php/Rides/deleteSavedRide/".$out['rideid']."'><span class='glyphicon glyphicon-remove'></span></a>";
                echo "</li>";
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