<?php
class A
{
    function add($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c;
    }
}
class B extends A
{
    function add($d,$e)
    {
        $f=$d*$e;
        echo "multiplication of numbers is :".$f;
    }
}
$obj=new B;
$obj->add(5,3);
?>