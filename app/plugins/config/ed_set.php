<?php
require_once '../../confing/session.php';
include '../../../install/dbconnect.php';
require_once '../../confing/config.php';

if (isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title><?php echo $res['name'];?></title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../../public/css/mvc.css">
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
<a href="../../../index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>
</div>
<div class="right">
<b><a href="../user/view/index.php?user=<?php echo base64_encode($_SESSION['user']) ?>" class="link"> User: <?php echo  $_SESSION['user'];?></a></b>
</div>
</nav>
<?php
require_once 'con_set.php';
?>
<div align="center">
<h2>Edit settings</h2>
</div>
<?php

$lista1 = new Vlada();
$lista1->uredi();

?>
</div>
<div class="footer">
Copyright @ <?php echo $res['footer'];?>
<?php echo date("Y");?>. All Rights Reserved.
</div>

<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=../index.php" />';
} ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../../../public/js/mvc.js"></script>
</body>
</html>
