<?php
$nm=array("milan","kishan","jay","rajesh","geeta");
ksort($nm);
foreach($nm as $value)
{
    echo "values after sort is :".$value."<br>";
}
?>