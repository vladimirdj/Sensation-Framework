<?php
include '../../../install/dbconnect.php';

class Mojcrud {

function uredi($id) {

global $link;

$sql = "SELECT * from confing where id='$id'";
$result = $link->query($sql);
while ($res = $result->fetch_assoc()) {
$array[] = $res;
}
return $array;

}

public function edit(){
global $link;

if(isset($_POST['submit'])) {
$name =  $_POST['name'];
$title = $_POST['title'];
$site_name =  $_POST['site_name'];
$id =  $_POST['id'];
$header =  $_POST['header'];
$footer =  $_POST['footer'];

$sql = "UPDATE confing set name='$name',title='$title', site_name='$site_name',	header='$header', footer='$footer' where id='$id'";

if($link->query($sql) === true){

echo '<script>window.history.go(-2);</script>';

echo "<font color='green'>USPESNO STE Azurirali. <br>";


} else{

echo "<font color='red'>greska<br> " ;
}
}
}
}
$lista = new Mojcrud();
$lista->edit();
?>
