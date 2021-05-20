<link rel='stylesheet' href='../public/css/mvc.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Sensation Framework</h2>
<h3>Install</h3>
</div>
<?php
include 'dbconnect.php';
if(isset($_POST['ubaci'])){
$site_name = $_POST['site_name'];
$name = $_POST['name'];
$user = $_POST['user'];
$title = $_POST['title'];
$header = $_POST['header'];
$footer = $_POST['footer'];
$sql = "INSERT INTO confing (site_name, name, user, title, header, footer) VALUES ('{$site_name}', '{$name}','{$user}','{$title}','{$header}','{$footer}')";
if (mysqli_query($link, $sql)){
echo "<div class='box'>
<form class='ins' action='installed.php' method='post'>
<h2 align=center color=red>Database Info Succecfully Entered<h2>
<input class='btn-5' type='submit' value='NEXT' name='next'/>
</form>
</div>";
} else {
echo "Error";
}
}
?>
