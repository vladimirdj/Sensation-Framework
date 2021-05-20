<?php
class Con {
function control() {
include "app/model/index.php";
$link = new Model();
$link->mod();
}
}
?>
