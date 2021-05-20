<?php
global $link;
$sql = "SELECT * from  confing";
$result = $link->query($sql);
$res = $result->fetch_assoc();
?>
