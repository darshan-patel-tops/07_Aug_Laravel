<?php


class random
{
    public $water = "water";
    protected $juice = "juice";
    private $blackwater = " black water";

    public $author = "Chetan Bhagat";
    public function books()
    {
        echo $this->water;
        echo "<br>";
        echo $this->juice;
        echo "<br>";
        echo $this->blackwater;
        echo "<br>";


        echo "Two States Books is written by ".$this->author;
    }
    // echo $water;
}


$obj = new random;

$obj->books();
$obj->water;
$obj->author;
// $obj->juice;
// $obj->blackwater;












?>