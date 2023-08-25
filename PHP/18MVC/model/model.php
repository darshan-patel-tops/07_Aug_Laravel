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
            // echo "Connection was  successful";
        }
        catch(\Throwable $th)
        {
            // echo "Connection was not successful";
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



        array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        echo "<pre>";
        // print_r($keysdata);
        echo "<br>";
        // print_r($valuesdata);
        echo "<br>";


            $sql = "INSERT INTO users ($keysdata) VALUES ('$valuesdata')";
            // $sql2 = "INSERT INTO users (name,username,email,password) VALUES ('$data[name]','$data[username]','$data[email]','$data[password]')";
            // echo $sql2;
            // echo $sql;

            // $this->connection->query($sql);

        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        echo "</pre>";
    } 
}


// $model = new model;
// $model->register("Save Data");
// $model->register("<br>Update Data");













?>