<?php
include '../../../install/dbconnect.php';
class Config{
function getMe() {

global $link;


$sql = "SELECT * from confing";
$result = $link->query($sql);
while ($res = $result->fetch_assoc()) {
$array[] = $res;
}

return $array;

}

function jedan($id) {

global $povezivanje;

$sql = "SELECT * from confing where id='$id'";
$result = $povezivanje->query($sql);
while ($res = $result->fetch_assoc()) {
$array[] = $res;
}
return $array;
}

function dva($id) {

global $povezivanje;

$sql = "SELECT * from confing where id='$id'";
$result = $povezivanje->query($sql);
while ($res = $result->fetch_assoc()) {
$array[] = $res;
}
return $array;
}

function obrisi($id) {
global $povezivanje;

$delete_post = "DELETE from confing where id='$id'";
if($povezivanje->query($delete_post) === true){

echo "<script>alert('delete')</script>";

echo "<script>window.history.back();</script>";

}
}
}
?>
