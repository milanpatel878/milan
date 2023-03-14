<?php 

$file=fopen("hello.txt","r") or die("file is not exist");

if($file)
{
    echo "File succefully Opened";

}
else 
{
    echo "Somthing went wrong";
}
?>