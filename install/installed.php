<link rel='stylesheet' href='../public/css/mvc.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Sensation Framework</h2>
<h3>Install</h3>
</div>
<?php
if(isset($_POST['next'])){
echo"<h2 align=center >Finished</h2>";
echo "<div class='box'>
<form class='ins' action='../index.php' method='post'>
<input class='btn-10' type='submit' value='Finish' name='next'/>
</form>
</div>";
rename ('index.php', 'index_old.php');
}else{
echo"<h2 align=center >Error</h2>";
}
?>
