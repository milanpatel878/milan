<?php 

$file="javascript.txt";
 unlink($file);
 
 if($file)
 {
    echo "File successfully removed";
 }
?>