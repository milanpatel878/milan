<?php
class a 
{
    public function a1()
    {
        $sub="php"."<br>";
        echo $sub;
    }
}
class b 
{
    public function a2()
    {
        $sub1="java"."<br>";
        echo $sub1;
    }
}
class c extends a,b 
{
    public function a3()
    {
        $sub2="oracle"."<br>";
        echo $sub2;
    }
}
$obj=new c;
$obj->a1();
$obj->a2();
$obj->a3();
?>