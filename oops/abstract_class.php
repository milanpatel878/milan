<?php
abstract class a
{
    public function milan()

    {
        echo "hello friends"."<br>";
    }
}
class b extends a
{
    public function milan1()
    {
        echo "how are you";
    }
}
$obj=new b;
$obj->milan();
$obj->milan1();
?>
