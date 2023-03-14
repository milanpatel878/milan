<?php 

$file=fopen("ajax.txt","r+") or("file not exist");

echo fgets($file);

fclose($file);
?>