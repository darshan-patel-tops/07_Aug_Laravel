<?php







abstract class rbi
{
    // public function hello()
    // {
    //     echo "Welcome to our website<br>";
    // }
}


class bank extends rbi
{
    public function interest()
    {
        // parent::hello();
        echo "interest<br>";
    }
}

// $obj = new rbi;
$obj = new bank;
$obj->interest();
// $obj->hello();


?>