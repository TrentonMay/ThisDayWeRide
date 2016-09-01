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
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("links/homeLink") ?>">Home</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("links/loginLink") ?>">Sign In</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("Rides/index")?>">Rides</a></li>
            <li class="col-lg-3 col-md-3 col-sm-3"><a href="<?php echo site_url("links/bikesLink")?>">Bikes</a></li>
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
            <button type="button" class="btn create" data-toggle="modal" data-target="#myModal">Create A Ride</button>
        </form>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="rideModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="rideModalLabel">Create A Ride</h3>
                <div class="modal-body">
                    <form class="form-horizontal" action="<?php echo site_url('Rides/addRide') ?>" enctype="multipart/form-data" method="post">
                        <h3 class="text-center dark-head">Create A Ride</h3>
                        <div class="container col-lg-5 col-md-5 col-sm-5  left">
                            <input class="form-control form1-margin" name="title" type="text" id="title" maxlength="20" placeholder="Title Of Ride">
                        </div>
                        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 right">
                            <input class="form-control form1-margin" name="date" type="date" id="date">
                        </div>
                        <div class="container  col-lg-5 col-md-5 col-sm-5 left">
                            <input class="form-control form1-margin" name="ridetime" type="time" id="ridetime" placeholder="time">
                        </div>
                        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 right">
                            <input class="form-control form1-margin" name="s-address" type="text" id="s-address" placeholder="Start Address">
                        </div>
                        <div class="container  col-lg-5 col-md-5 col-sm-5 left">
                            <input class="form-control form1-margin" name="s-city" type="text" id="s-city" placeholder="Start City">
                        </div>
                        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 right">
                            <input class="form-control form1-margin" name="s-zip" type="text" id="s-zip" placeholder="Start Zip">
                        </div>
                        <div class="container  col-lg-5 col-md-5 col-sm-5 left">
                            <input class="form-control form1-margin" name="s-state" type="text" id="s-state" placeholder="Start State">
                        </div>
                        <div class="container col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 right">
                            <input class="form-control form1-margin" name="e-zip" type="text" id="e-zip" placeholder="End Zip">
                        </div>
                        <div class="container  col-lg-5 col-md-5 col-sm-5 left">
                            <input class="form-control form1-margin" name="e-city" type="text" id="e-city" placeholder="End City">
                        </div>
                        <div class="container  col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 right">
                            <input class="form-control form1-margin" name="userfile" type="file" id="userfile" placeholder="Choose Image">
                        </div>
                        <div class="container col-lg-6 col-md-6 col-sm-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 left">
                            <button type="submit" class="btn btn-primary submit col-lg-12 col-md-12 col-sm-12 form1-margin">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12 user-cont">
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

        <?php
        //if(isset($ridesArray)){
            foreach($ridesArray as $out){
                echo "<li>";
                echo "<h3>".$out['title']."</h3>";
                echo "<img class='img-responsive img-thumbnail' src=". base_url(). "userRides/".$out['image']."/>";
                echo "<p>".$out['date']." At ".$out['ridetime']. "</p>";
                echo "<p>Starts At ".$out['StartAddress']." ".$out['StartCity']." ".$out['StartZip']." "."</p>";
                echo "<p>Ends At ".$out['EndCity']." ".$out['EndZipcode']."</p>";
                echo "<span class='glyphicon glyphicon-plus'></span>";
                echo "</li>";
            }
        //}
        ?>
    </ul>
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