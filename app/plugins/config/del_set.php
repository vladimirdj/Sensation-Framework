<?php

include '../../../install/dbconnect.php';
class Vlada{
function obrisi() {
global $link;
if ( isset( $_GET['id'] ) ) {
$id= $_GET['id'];
$delete_post = "DELETE from confing where id='$id'";
if($link->query($delete_post) === true){
echo "<script>alert('Poruka je obrisana!')</script>";
echo "<script>window.history.back();</script>";
}
}
}
}
$id = $_GET['id'];
$lista = new Vlada();
$lista->obrisi($id);

?>
