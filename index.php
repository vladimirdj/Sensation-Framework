<?php
$filename = file_exists('install');
if (file_exists('install/index.php')) {
?>
<a href="">
<script> window.location.href="install/index.php";  </script>
<?php
}else{
include "function/route.php";
include "function/loader.php";
include "function/helper.php";
include "install/dbconnect.php";
require_once 'app/confing/session.php';
require_once 'app/confing/setings.php';
require_once 'app/confing/config.php';

$link = new Settings();
$link->link();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title><?php echo $res['name'];?></title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="public/css/mvc.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="zaglavlje">
<h1><?php echo $res['site_name'];?></h1>
</div>
<div class="gore">
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>
<a href="app/plugins/config/view.php" class="link" title="Config">Config</a>

</div>
<div class="right">
<b><a href="app/plugins/user/view/index.php?user=<?php echo base64_encode($_SESSION['user']) ?>" class="link"> User: <?php echo  $_SESSION['user'];?></a></b>
</div>
</nav>
<br>
<div align="center">
<h1>
<?php
$list = new Routers();
$list->router();
?>
</h1>
</div>
<br>
<div align="center">
<h2>Login</h2>
</div>
<?php

include 'app/plugins/login/view/index.php';

$poziv = new Lo();
$poziv-> login();
?>

</div>
<br>
<div class="podnozije">
Copyright @ Sensation Energy
<?php echo date("Y");?>. All Rights Reserved.
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="public/js/mvc.js"></script>
<?php
}
?>
