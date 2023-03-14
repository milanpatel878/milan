<?php
interface a 
{
    public function milan();
}
interface b 
{
    public function milan1();
}
interface c
{
    public function milan2();
}
class d implements a,b,c 
{
    public function milan()
    {
        $nm1="hii i am milan"."<br>";
        echo $nm1;
    }
    public function milan1()
    {
        $nm2="hii i am kishan"."<br>";
        echo $nm2;
    }
    public function milan2()
    {
        $nm3="hii i am jay"."<br>";
        echo $nm3;
    }
}    
$obj=new d;
$obj->milan();
$obj->milan1();
$obj->milan2();

?>