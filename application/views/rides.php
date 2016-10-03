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
<div class="container-fluid banner-v2">
    <img src="<?php echo base_url();?>assets/Banners/logo.png" class="img-responsive col-lg-2 col-md-2 col-sm-2 col-xs-2 hidden-xs left logo">
    <div class="container col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 col-lg-6 col-md-6 col-sm-6 col-xs-12 menu menuV2">
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
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 search">
        <form class="form-inline col-lg-offset-3 col-md-offset-3 col-sm-offset-3" action="<?php echo site_url("Rides/searchRides");?>" method="post">
            <div class="form-group hidden-xs">
                <label for="stateinput" id="statelabel">Search For Rides</label>
                <input type="text" class="form-control" id="state" placeholder="State" name="state">
            </div>
            <div class="form-group hidden-xs">
                <input type="text" class="form-control" id="zip" placeholder="Zipcode" name="zip">
            </div>
            <button type="submit" class="btn btn-primary submit hidden-xs">Submit</button>
            <button type="button" class="btn create col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-5" data-toggle="modal" data-target="#myModal">Create A Ride</button>
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
                        <div class="container col-lg-5 col-md-5 col-sm-5 left">
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

<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 user-cont">
    <ul class="container col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

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
                if($session === true){
                    echo "<a href='".base_url()."index.php/Rides/saveRide/".$out['rideid']."'><span class='glyphicon glyphicon-plus'></span></a>";
                }else{
                    echo "";
                }
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