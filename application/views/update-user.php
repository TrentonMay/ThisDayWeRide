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
    <h3 class="text-center dark-head">Users</h3>
</div>

<div class="container col-lg-offset-1 col-md-offset-4 col-sm-offset-3 col-xs-offset-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 form-style form-pad left">
    <form class="form-horizontal" action="<?php $nodata=" "; echo site_url('Users/updateUser/'.$userData[0]['userid']);?>" method="post">
        <h3 class="text-center dark-head">Add A User</h3>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 left">
            <input class="form-control form1-margin" type="text" id="username" name="username" placeholder="Username" value="<?php if(isset($userData[0]['username'])){echo $userData[0]['username'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 left">
            <input class="form-control form1-margin" type="email" id="email" name="email" placeholder="Email" value="<?php if(isset($userData[0]['email'])){echo $userData[0]['email'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 left">
            <input class="form-control form1-margin" type="password" id="password" name="password" placeholder="Password" value="<?php if(isset($userData[0]['password'])){echo $userData[0]['password'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 left">
            <input class="form-control form1-margin" type="text" id="admin" name="admin" placeholder="Admin" value="<?php if(isset($userData[0]['admin'])){echo $userData[0]['admin'];}else{echo $nodata;} ?>">
        </div>
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 left">
            <button type="submit" class="btn btn-primary submit col-lg-12 col-md-12 col-sm-12 col-xs-12 form1-margin">Submit</button>
        </div>
    </form>
</div>


<div class="container col-lg-7 col-md-10 col-sm-12 col-xs-12 user-cont right">
    <ul class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
        <?php
        foreach($userArray as $out){
            echo '<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
            echo '<ul class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 users-row">';

            echo '<li class="col-lg-1 col-md-1 col-sm-1 col-xs-1 left user-style">';
            echo "<p>". $out['userid']. "</p>";
            echo '</li>';

            echo '<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 left user-style">';
            echo "<p>". $out['username']. "</p>";
            echo '</li>';

            echo '<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 left user-style">';
            echo "<p>". $out['email']. "</p>";
            echo '</li>';

            echo '<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 left user-style">';
            echo "<p>". $out['password']. "</p>";
            echo '</li>';

            echo '<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 left user-style">';
            echo "<a href='".base_url()."index.php/Users/deleteUser/".$out['userid']."'><span class='glyphicon glyphicon-remove'></span></a>";
            echo "<a href='".base_url()."index.php/Users/requestUpdateUser/".$out['userid']."'><span class='glyphicon glyphicon-wrench col-lg-offset-5'></span></a>";
            echo '</li>';

            echo '</ul>';
            echo '</li>';
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