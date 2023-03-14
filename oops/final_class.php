<?php
class a
{
    public function aaa()
    {
        echo "milan gondaliya"."<br>";
    }
}
class b extends a
{
    public function bbb()
    {
        echo "kishan sinojiya"."<br>";
    }
}
final class c extends b
{
    public function ccc()
    {
        echo "jay virani"."<br>";
    }
}
$obj=new c;
$obj->aaa();
$obj->bbb();
$obj->ccc();
?>