<?php
spl_autoload_register(function ($main) {
$path = sprintf('%s.php', str_replace('_', DIRECTORY_SEPARATOR, $main) );
if (file_exists($path)) {
include $path;
} else {
echo "Value not found";
}
});
$autoload['packages'] = array();
?>
