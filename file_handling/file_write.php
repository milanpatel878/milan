<?php 

$file=fopen("ajax.txt","w+") or("file not exist");

$txt="ajax stands for asynchrounous javascript and xml";
fwrite($file,$txt);

echo fgets($file);

fclose($file);

?>