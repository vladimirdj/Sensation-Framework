<link rel='stylesheet' href='../public/css/mvc.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Sensation Framework</h2>
<h3>Install</h3>
</div>
<form action="u.php" method="post">
<label>Site name</label>
<input type="text" name="site_name" class="form-input">
</div>
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-input">
</div>
<div class="form-group">
<label for="user">User</label>
<div>
<select name="user" id="user"  class="form-input">
<?php
include 'dbconnect.php';

$query = "SELECT * FROM users";
$select_categories = mysqli_query($link,$query);

while($row = mysqli_fetch_assoc($select_categories)){

$user =  $row['user'];

echo "<option value='$user'>$user</option>";

}
?>
</select>
</div>
</div>
<div class="form-group">
<label>Title</label>
<input type="text" name="title" class="form-input">
</div>
<div class="form-group">
<label>Header</label>
<input type="text" name="header" class="form-input">
</div>
<div class="form-group">
<label>Footer</label>
<input type="text" name="footer" class="form-input">
</div>
<input type="submit" class="btn-2" value="Add" name="ubaci">
</form>
