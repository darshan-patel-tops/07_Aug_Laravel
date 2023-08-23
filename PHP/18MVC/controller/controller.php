<!-- <h1>inside controller</h1> -->



<?php


class controller
{

public function __construct()
{



        // echo "<pre>";
        // // echo "<br>";
        // print_r($_SERVER);
        // echo "</pre>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        if(isset($_SERVER['PATH_INFO']))
        {
            echo "Inside if";
            switch($_SERVER['PATH_INFO'])
            {
                case "/home":
                    // echo "Inside if";
                    require_once("Templates/pato-master/index.html");
                    break;
            }
        }
        else
        {
            
            echo "Inside else";
            header("location:home");
        }
   
    
}


}

$obj = new controller;
// $obj->index();

?>