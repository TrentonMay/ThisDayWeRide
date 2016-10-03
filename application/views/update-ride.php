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
    <h3 class="text-center dark-head">User Rides</h3>
</div>

<div class="container col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-3 col-xs-offset-1 form-style form-pad ">
    <form class="form-horizontal" action="<?php $nodata=""; echo site_url('Rides/updateRide/'.$rideData[0]['rideid']); ?>" enctype="multipart/form-data" method="post">
        <h3 class="text-center dark-head">Create A Ride</h3>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-xs-5  left">
            <input class="form-control form1-margin" name="title" type="text" id="title" maxlength="20" placeholder="Title Of Ride" value="<?php if(isset($rideData[0]['title'])){echo $rideData[0]['title'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right">
            <input class="form-control form1-margin" name="date" type="date" id="date" value="<?php if(isset($rideData[0]['date'])){echo $rideData[0]['date'];}else{echo $nodata;} ?>">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 col-xs-5 left">
            <input class="form-control form1-margin" name="ridetime" type="time" id="ridetime" placeholder="time" value="<?php if(isset($rideData[0]['ridetime'])){echo $rideData[0]['ridetime'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right">
            <input class="form-control form1-margin" name="s-address" type="text" id="s-address" placeholder="Start Address" value="<?php if(isset($rideData[0]['StartAddress'])){echo $rideData[0]['StartAddress'];}else{echo $nodata;} ?>">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 col-xs-5 left">
            <input class="form-control form1-margin" name="s-city" type="text" id="s-city" placeholder="Start City" value="<?php if(isset($rideData[0]['StartCity'])){echo $rideData[0]['StartCity'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right">
            <input class="form-control form1-margin" name="s-zip" type="text" id="s-zip" placeholder="Start Zip" value="<?php if(isset($rideData[0]['StartZip'])){echo $rideData[0]['StartZip'];}else{echo $nodata;} ?>">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 col-xs-5 left">
            <input class="form-control form1-margin" name="s-state" type="text" id="s-state" placeholder="Start State" value="<?php if(isset($rideData[0]['StartState'])){echo $rideData[0]['StartState'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right">
            <input class="form-control form1-margin" name="e-zip" type="text" id="e-zip" placeholder="End Zip" value="<?php if(isset($rideData[0]['EndZipcode'])){echo $rideData[0]['EndZipcode'];}else{echo $nodata;} ?>">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 col-xs-5 left">
            <input class="form-control form1-margin" name="e-city" type="text" id="e-city" placeholder="End City" value="<?php if(isset($rideData[0]['EndCity'])){echo $rideData[0]['EndCity'];}else{echo $nodata;} ?>">
        </div>
        <div class="container  col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right">
            <input class="form-control form1-margin" name="image" type="text" id="image" placeholder="Choose Image" value="<?php if(isset($rideData[0]['image'])){echo $rideData[0]['image'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 left">
            <button type="submit" class="btn btn-primary submit col-lg-12 col-md-12 col-sm-12 col-xs-12 form1-margin">Submit</button>
        </div>
    </form>
</div>


<div class="container col-lg-7 col-md-7 col-sm-12 col-xs-12 user-cont right">
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
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
                echo "<a href='".base_url()."index.php/Rides/deleteRide/".$out['rideid']."/".$out['image']."'><span class='glyphicon glyphicon-remove'></span></a>";
                echo "<a href='".base_url()."index.php/Rides/requestUpdateRide/".$out['rideid']."'><span class='glyphicon glyphicon-wrench col-lg-offset-10 col-md-offset-10 col-sm-offset-10'></span></a>";
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