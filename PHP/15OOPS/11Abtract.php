<?php







abstract class rbi
{
    abstract public function hello();
    abstract public function hello2();
    public function hello3()
    {
        echo "Hello 3";
    }
}


class bank extends rbi
{
    public function interest()
    {
        // parent::hello();
        echo "interest<br>";
    }

    public function hello()
    {
        echo "<br>Hello";
    }
    public function hello2()
    {
        echo "<br>Hello";
    }
}

// $obj = new rbi;
$obj = new bank;
$obj->interest();
$obj->hello();
$obj->hello3();


?>