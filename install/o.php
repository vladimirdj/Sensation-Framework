<link rel='stylesheet' href='../public/css/mvc.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Sensation Framework</h2>
<h3>Install</h3>
</div>
<?php
include 'dbconnect.php';
if(isset($_POST['ubaci'])){
$name = $_POST['name'];
$age = $_POST['age'];
$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];
$sql = "INSERT INTO users (name, age, user, password, email, role) VALUES ('{$name}', '{$age}', '{$user}', '{$password}', '{$email}', '{$role}')";
if (mysqli_query($link, $sql)){
echo "<div class='box'>
<form class='ins' action='config.php' method='post'>
<h2 align=center color=red>Database Info Succecfully Entered<h2>
<input class='btn-10' type='submit' value='NEXT' name='next'/>
</form>
</div>";
} else {
echo "Error";
}
}
?>
