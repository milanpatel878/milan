<?php
class a 
{
    public function a1()
    {
        $sub="php"."<br>";
        echo $sub;
    }
}
class b extends a
{
    public function a2()
    {
        $sub1="java"."<br>";
        echo $sub1;
    }
}
class c extends b 
{
    public function a3()
    {
        $sub2="python"."<br>";
        echo $sub2;
    }
}
class d extends c 
{
    public function a4()
    {
        $sub3="oracle"."<br>";
        echo $sub3;
    }
}
$obj=new d;
$obj->a1();
$obj->a2();
$obj->a3();
$obj->a4();
?>