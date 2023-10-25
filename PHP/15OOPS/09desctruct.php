<?php


class mobile
{


    public function __construct() 
    {
        echo "Welcome to our website<br>";    
    }
    public function random()
    {
        echo "Random function<br>";
    }
    public function __destruct()
    {
        
        echo "Visit Again";    
    }

}


$obj = new mobile;
$obj->random();
$obj->random();
$obj->random();
$obj->random();



// destruct is called at last





?>