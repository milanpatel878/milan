<?php 
$file=fopen("ajax.txt","w+") or("file not exist");

if($file)
{
    echo "File succefully Opened";

}
else 
{
    echo "Somthing went wrong";
}

fclose($file);

?>