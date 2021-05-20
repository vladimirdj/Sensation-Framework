<style media="screen">
.raspon_4_of_2 {
width: 100%;

}
</style>
<?php
require_once 'model.php';
?>
<div align="center">
<a href="add.php">		<button type="submit" class="btn-3" name="add"><i class='fa fa-fw fa-paper-plane'></i>Add</button></a>
</div>
<?php
class listarController{
private $lista;
protected $id;

public function vlada(){

$lista = new Config();
$lista->getMe();

$res = $lista->getMe();
foreach ($res as $value){
?>

<div class="card">
Name: <h2><?php echo $value['name']; ?></h2>
Site title:	<h2><?php echo $value['title']; ?></h2>
Site name:	<h2><?php echo $value['site_name']; ?></h2>
Header:	<h2><?php echo $value['header']; ?></h2>
Footer:	<h2><?php echo $value['footer']; ?></h2>
User:	<h2><?php echo $value['user']; ?></h2>

</div>
<br><br>
<div align="center">
<a href="ed_set.php?id=<?php echo $value['id']; ?>"><button type="submit" class="btn-6" name="Edit"><i class='fa fa-fw fa-save'></i>Edit</button></a>
<a href=del_set.php?id=<?php echo $value['id']; ?>><button type="submit" class="btn-5" name="Delete"><i class='fa fa-fw fa-trash'></i>Delete</button></a>
</div>

<?php
}
?>
<br><br>
<?php } } ?>
