<?php
$ip = $_SERVER['REMOTE_ADDR'];
$handle=fopen('.htaccess', 'a');
$save=fwrite($handle,"
deny from $ip");
fclose($handle);
?>
