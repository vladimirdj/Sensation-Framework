<?php
session_start();
require_once '../../../../install/dbconnect.php';

class Mojcrud {
public function login(){
global $link;

if(isset($_POST['user'])) {
$user = $_POST['user'];
$password = $_POST['password'];

if($user == "" || $password == "") {
echo "Either username or password field is empty.";
echo "<br/>";
echo "<a href='../../../../index.php'>Go back</a>";
} else {
$upit = "SELECT * FROM users WHERE user='$user' AND password='$password'";

$pokretanje_upita = $link->query($upit);


if ($pokretanje_upita->num_rows > 0) {
//	if (mysqli_num_rows($pokretanje_upita) > 0) {

$_SESSION['user'] = $user;
header("location:../../../../index.php");

} else {

echo "Greska: Prijava!";
}
}
}
}
}
$lista = new Mojcrud();
$lista->login();
?>
