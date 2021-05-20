<?php
include 'dbconnect.php';
$table_confing = "confing";
$confing_id = "id";
$site_name = "site_name";
$name = "name";
$user = "user";
$title = "title";
$header = "header";
$footer = "footer";

$table_users = "users";
$user_id = "u_id";
$name = "name";
$age = "age";
$user = "user";
$password = "password";
$email = "email";
$role = "role";

$sql3 = "create table $table_confing(
$confing_id int NOT NULL AUTO_INCREMENT,
$site_name varchar(200),
$name varchar(200),
$user varchar(200),
$title varchar(200),
$header varchar(200),
$footer varchar(200),
primary key($confing_id)
)";

$sql4 = "create table $table_users(
$user_id int NOT NULL AUTO_INCREMENT,
$name varchar(200),
$age varchar(200),
$user varchar(200),
$password varchar(200),
$email varchar(200),
$role varchar(200),
primary key($user_id)
)";

?>


<!DOCTYPE html>
<html>
<head>
<title>Energy Framework</title>
<link rel='stylesheet' href='../public/css/mvc.css' />
</head>
<body>
<div class="card">
<?php
if(mysqli_query($link,$sql3)){
echo 'create table '.$table_confing;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_confing;
echo "<br/>";
echo '</p>';
}

if(mysqli_query($link,$sql4)){
echo 'create table '.$table_users;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_users;
echo "<br/>";
echo '</p>';
}
mysqli_close($link);
?>
<div class='card'>
<form class='ins' action='ubaci.php' method='post'>
<h2 align=center color=red>Database Info Succecfully Entered<h2>
<input class='btn-5' type='submit' value='NEXT' name='next'/>
</form>

</div>
</body>
</html>
