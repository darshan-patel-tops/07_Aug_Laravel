<!-- <h1>inside controller</h1> -->



<?php


class controller
{

    public $baseurl = "http://localhost/Batches/07_Aug_Laravel/PHP/18MVC/assets/";
    public $url = "http://localhost/Batches/07_Aug_Laravel/PHP/18MVC/assets/";
    // public $baseurl = "http://localhost/Batches\07_Aug_Laravel\PHP\18MVC\assets";


public function __construct()
{



        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
       
        if(isset($_SERVER['PATH_INFO']))
        {
            // echo "Inside if";
            switch($_SERVER['PATH_INFO'])
            {
                case "/home":
                    require_once("view/header.php");
                    require_once("view/home.php");
                    require_once("view/footer.php");
                    break;
                    
                case "/menu";
                    require_once("view/header.php");
                    require_once("view/menu.php");
                    require_once("view/footer.php");
                    break;


                case "/reservation":
                        require_once("view/header.php");
                        echo "<h1>Reservation Page</h1>";
                        require_once("view/footer.php");
                        break;
                        
                case "/register":
                        // require_once("view/header.php");
                        require_once("view/register.php");
                        // require_once("view/footer.php");

                    break;

                case "/login":
                        require_once("view/login.php");
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