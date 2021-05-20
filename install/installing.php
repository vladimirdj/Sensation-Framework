<link rel='stylesheet' href='../public/css/mvc.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Sensation Framework</h2>
<h3>Install</h3>
</div>
<?php
$writer="<?php".'
'.'$HOST_name = '."'".$_POST['dbhost']."'".';
'.'$DB_name = '."'".$_POST['dbname']."'".';
'.'$DB_username = '."'".$_POST['dbuser']."'".';
'.'$DB_password = '."'".$_POST['dbpass']."'".';
$link = mysqli_connect($HOST_name,$DB_username,$DB_password,$DB_name);
'."?>";

$write=fopen('dbconnect.php' , 'w');
if(empty($_POST['dbhost']&&
$_POST['dbname']&&
$_POST['dbuser']&&
$_POST['dbpass'])){
echo"<h2 align=center >All Fields are required! Please Re-enter</h2>";

}else{
if(isset($_POST['install']))
{
fwrite($write,$writer);
fclose($write);
echo "<div class='card'>
<form class='ins' action='install.php' method='post'>
<h2 align=center color=green>Database Info Succecfully Entered<h2>
<input class='btn-3' type='submit' value='NEXT' name='next'/>
</form>
</div>";

}else{ echo "<h2 align=center >Error<h2>"; }}

?>
