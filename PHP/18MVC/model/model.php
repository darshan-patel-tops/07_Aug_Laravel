<?php



class model
{

        public $connection;

            // $connection = new mysqli("localhost","root","","07_aug_laravel");

    public function __construct()
    {


        
        try
        {

            $this->connection = new mysqli("localhost","root","","07_aug_laravel");
            echo "Connection was  successful";
        }
        catch(\Throwable $th)
        {
            echo "Connection was not successful";
        }
    }

    public function register($data)
    {

        // $connection = new mysqli("localhost","root","","07_aug_laravel");
        // if($connection)
        // {
        //     echo "Success<br>";
        // }
        // else
        // {
        //     echo "fail<br>";
        // }
            // echo "Inside model<br>";
        // echo $data;

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } 
}


// $model = new model;
// $model->register("Save Data");
// $model->register("<br>Update Data");













?>