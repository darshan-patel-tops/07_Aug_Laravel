<?php





class magic
{

    public $name = "admin";
    public function __get($receive)
    {
        echo $receive . "<br>";
    }

    public function __call($a,$b)
    {
        echo "<pre>";
        // echo "$a and $b" . "<br>";
        print_r($a);
        print_r($b);
        echo "</pre>";
    }

    public function __set($welcome , $bye)
    {   
        $welcome = "Welcome";
        $bye = "bye";
        echo $welcome ."<br>";
            echo $bye . "<br>";
    }
}



$obj = new magic;
$obj->okay;
$obj->admin;
$obj->user;
$obj->faltu;
echo $obj->name;
$obj->addition(10,20);
$obj->minus(10,20);
$obj->check = "Welcome";




?>