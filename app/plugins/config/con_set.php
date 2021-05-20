<?php

require "mod_set.php" ;
class Vlada{
private $lista;
protected $id;

public function uredi(){
$id = $_GET['id'];
$lista = new Mojcrud();
$lista->uredi($id);
$res = $lista->uredi($id);
foreach ($res as $value){
$id = $value['id'];
$name = $value['name'];
$title = $value['title'];
$site_name= $value['site_name'];
$header = $value['header'];
$footer = $value['footer'];
?>
<form  action="mod_set.php?id=<?php echo $value['id']; ?>" method="post" enctype="multipart/form-data"><!--enctype multipart encodes the form differently if we have to upload files etc-->

<div class="form-group">
<label for="name">Name</label>
<input id="name" type="text" class="form-input" name="name" value="<?php echo $name;?>">
</div>
<div class="form-group">
<label for="name">Title</label>
<input id="name" type="text" class="form-input" name="title" value="<?php echo $title;?>">
</div>

</div>

<div class="form-group">
<label for="site_name">Site_name</label>
<input id="site_name" type="text" class="form-input"  name="site_name" value="<?php echo $site_name;?>">
</div>
<div class="form-group">
<label for="header">Header</label>
<input id="header" type="text" class="form-input"  name="header" value="<?php echo $header;?>">
</div>

<div class="form-group">
<label for="footer">Footer</label>
<input id="footer" type="text" class="form-input"  name="footer" value="<?php echo $footer;?>">
</div>

<div class="form-group">
<input type="button" class="btn-2" onclick="location.href='view.php'" value="Cancel" />
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<input type="submit" class="btn-1" value="submit" name="submit">
</div>


</form>

<?php
}
}
}
?>
