<?php
class a
{
    function add($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c;
    }
}
class b extends a
{
    function add($a,$b)
    {
        $c=$a*$b;
        echo "multiphication of numbers is :".$c;
    }
}
$obj=new b;
$obj->add(5,3);
?>