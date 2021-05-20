
<?php
require_once '../../../confing/session.php';
include '../../../../install/dbconnect.php';
include '../../../confing/config.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title><?php echo $res['name'];?></title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../../../public/css/mvc.css">
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
<a href="../../../../index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>
</div>
<div class="right">
<b><a href="index.php?user=<?php echo base64_encode($_SESSION['user']) ?>" class="link"> User: <?php echo  $_SESSION['user'];?></a></b>
</div>
</nav>
<br>
<div align="center">

<?php
$_SESSION['user'] = base64_decode($_GET['user']);
$sql2 = "SELECT * from users where user = '$_SESSION[user]'";
$result1 = $link->query($sql2);
while ($value = $result1->fetch_assoc()) {
?>
<h2>Id: <?php echo $value['u_id']; ?></h2>
<h2>User: <?php echo $value['user']; ?></h2>
<h2>Password: <?php echo $value['password']; ?></h2>
<h2>Name: <?php echo $value['name']; ?></h2>
<h2>Age: <?php echo $value['age']; ?></h2>
<h2>Email: <?php echo $value['email']; ?></h2>
<br>

<?php
}
?>
<a href="../../login/view/logout.php"><button class="btn-10">Logout</button></a>
