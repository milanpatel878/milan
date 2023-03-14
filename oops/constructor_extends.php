<?php
class m
{
    public function __construct()
    {
        $surname="gondaliya"."<br>";
        echo $surname;
    }
}
class g extends m
{
    public function display()
    {
        $name="milan"."<br>";
        echo $name;
    }
}
$obj=new g;
$obj->display();
?>