<?php

class Lo {
public function login()
{
?>
<link rel="stylesheet" href="../../../public/css/mvc.css">
<div align="center">
<form action="app/plugins/login/controller/prijava.php" method="post" id="forma">
<label for="user"><b>User</b></label>
<input type="text" name="user" required class="form-input" value="admin">

<label for="password"><b>Password</b></label>
<input type="password" name="password" required class="form-input"  value="admin">

<input type="submit" name="prijava" value="Login" class="btn-10">


</form>
</div>
<?php }} ?>
