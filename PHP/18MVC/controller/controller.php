<!-- <h1>inside controller</h1> -->



<?php

require_once("model/model.php");

class controller extends model
{

    public $baseurl = "http://localhost/Batches/07_Aug_Laravel/PHP/18MVC/assets/";
    public $adminurl = "http://localhost/Batches/07_Aug_Laravel/PHP/18MVC/assets/admin";
    public $url = "http://localhost/Batches/07_Aug_Laravel/PHP/18MVC/assets/";
    // public $baseurl = "http://localhost/Batches\07_Aug_Laravel\PHP\18MVC\assets";


public function __construct()
{
    parent::__construct();


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
                        if(isset($_REQUEST['reg_btn']))
                         {

                            $data = $_REQUEST;
                            $this->register($data);
                            // echo "<pre>";
                            // print_r($_REQUEST);
                            // echo "</pre>";

                         }

                        require_once("view/register.php");
                        // require_once("view/footer.php");

                    break;

                case "/login":

                        // print_r($_REQUEST);
                        $data = $_REQUEST;
                        $this->login($data);

                        require_once("view/login.php");
                        break;

                case "/admin-dashboard":

                        require_once("view/admin/adminheader.php");
                        require_once("view/admin/adminhome.php");
                        // echo "Admin Page";

                        require_once("view/admin/adminfooter.php");
                        break;

                    case "/admin/update-user":
                        if(isset($_REQUEST['update_btn']))
                        {
                            echo "<pre>";
                            // print_r($_REQUEST);
                            // print_r($_FILES);
                            $response = $this->selectwhere("users",$_REQUEST["update_btn"]);
                            // print_r($response);
                            echo "</pre>";
                            // exit;
                            require_once("view/admin/adminheader.php");
                            require_once("view/admin/updateuser.php");
                            require_once("view/admin/adminfooter.php");
                           
                            
                        }
                        else if(isset($_REQUEST["update"]))
                        {
                            // echo "<pre>";
                            // print_r($_REQUEST);
                            // print_r($_FILES);
                            // echo "</pre>";
                            // exit();
                            // print_r($_REQUEST);

                            // if($_FILES['image']['name'] != null  )
                            // if($_FILES['image']['error'] == 0  )
                            if($_FILES['image']['error'] == UPLOAD_ERR_OK  )
                            {
                                $image = "uploads/".time().$_FILES['image']["name"];
                                move_uploaded_file($_FILES['image']['tmp_name'],$image);
                            }
                            else
                            {
                               $image = $_REQUEST["old_profile_pic"];
                            }

                            // exit();
                            $data = array(
                                "name"=>$_REQUEST["name"],
                                "email"=>$_REQUEST["email"],
                                "password"=>$_REQUEST["password"],
                                "username"=>$_REQUEST["username"],
                                "image" => $image 
                            );
                            $response =$this->update("users",$data ,$_REQUEST["update"]);
                            echo $response;
                            header("location:users");    
                        }
                        else
                        {
                            header("location:admin-dashbaord");
                        }

                        break;
                        case "/admin/users":
                           $fetch =  $this->select("users");
                        //    echo "<pre>";
                        //    echo "from controller";
                        //    print_r($fetch);
                        //    print_r($_SERVER);
                        //    exit;
                        if(isset($_REQUEST['delete_btn']))
                        {
                            $this->delete("users","$_REQUEST[delete_btn]");
                        }
                        
                       

                        require_once("view/admin/adminheader.php");
                        require_once("view/admin/allusers.php");
                        // echo "Admin Page";
                        // print_r($_REQUEST);
                        
    
                            require_once("view/admin/adminfooter.php");
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