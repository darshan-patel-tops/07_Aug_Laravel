<?php


require_once('model/model.php');

class controller extends model
{
    public function __construct()
    {
        parent::__construct();
            // echo "Hello";

        if(isset($_SERVER['PATH_INFO']))
        {
                switch ($_SERVER['PATH_INFO']) 
                {
                    case '/home':
                        $data = $this->select('products');
                        require_once('view/header.php');
                        require_once('view/index.php');
                        require_once('view/footer.php');
                        // echo "inside switch";
                        break;
                        case '/add-product':
                            require_once('view/header.php');
                            require_once('view/add.php');
                            require_once('view/footer.php');
                            break;
                        
                        case '/add':
                            
                            echo "<pre>";
                            // print_r($_REQUEST);
                            // print_r($_FILES);
                            echo "</pre>";
                            $data = $_REQUEST;
                            $image = $_FILES;
                                $insert = $this->insert('products',$data,$image);
                            
                            break;

                            case '/update-product':
                                print_r($_REQUEST);
                                break;
                    default:
                            echo "Page Not found";
                    break;
                }
        }
        else
        {
            header("location:home");
        }
    




    }
}


$object = new controller;

















?>