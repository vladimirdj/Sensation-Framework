<?php

include '../../../install/dbconnect.php';
require_once '../../confing/session.php';

class Mojcrud {

private  $link;

public function ubaci() {

global $link;


if(isset($_POST['Submit'])) {
$name =  $_POST['name'];
$title = $_POST['title'];
$site_name =  $_POST['site_name'];
$header =  $_POST['header'];
$footer =  $_POST['footer'];

$sql = "INSERT INTO confing (name,title,site_name,header,footer,user) VALUES('$name','$title','$site_name','$header','$footer','{$_SESSION["user"]}')";

if($link->query($sql) === true){
echo "<font color='green'>Add<br>";
echo '<script>window.history.go(-2);</script>';

} else{
echo "<font color='red'>Error<br> $sql. " . $mysqli->error;
}
}
}
}
$baci = new Mojcrud();
$baci->ubaci();
?>
