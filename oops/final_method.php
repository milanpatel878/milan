<?php 
class milan 
{
   final function mul($a,$b)
    {
     
       $c=$a+$b;
       echo "Additions of numebrs is :".$c;  
    }
}

class kishan extends milan 
{
    function mul($a,$b)
    {
       $c=$a*$b;
       echo "Multiplications of numebrs is :".$c;  
    }
}

$obj=new kishan;
$obj->mul(5,2);
?>