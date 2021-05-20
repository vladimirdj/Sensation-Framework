<?php
class Routers {
protected $index = 'index.php';
public function router() {
$request = $_SERVER['REQUEST_URI'];
if ($request) {
include "app/view/index.php";
}else{
http_response_code(404);
require 'add/404.php';
}
}
}
?>
