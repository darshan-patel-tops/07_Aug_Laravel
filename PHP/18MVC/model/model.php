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


    public function insert($tbl,$data)
    {

        

        // array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        echo "<pre>";
        // print_r($keysdata);
        echo "<br>";
        // print_r($valuesdata);
        echo "<br>";


            $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";
            echo $sql;
            // $sql2 = "INSERT INTO users (name,username,email,password) VALUES ('$data[name]','$data[username]','$data[email]','$data[password]')";
            // echo $sql2;
            $this->connection->query($sql);
            header("location:products");
        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        echo "</pre>";
    } 

    public function update($tbl,$values,$id)
    {
        echo "<pre>";
        print_r($values);
        $SQL = " UPDATE $tbl SET ";
        foreach($values as $key => $value)
        {
            $SQL .= " $key = '$value' , ";
        }
        $SQL = rtrim($SQL," , ");
        
        $SQL .= " WHERE id = $id";
        // echo $SQL;
        $sqlex = $this->connection->query($SQL);
        if($sqlex->num_rows > 0)
        {
            $data = "Updated successfully";
        }
        else
        {
            $data = "Something went wrong";
            // echo $data;
        }
        return $data;
    }


public function selectwhere($tbl,$id)
{
    $SQL = "SELECT * FROM $tbl WHERE id = $id";
    // echo $SQL;
    $sqlex = $this->connection->query($SQL);
    // exit;
    if($sqlex->num_rows > 0)
    {
        $data = $sqlex->fetch_object();
        // print_r($data);
        // exit;
    }
    else 
    {
        $data = "Something Went Wrong";
        // return $data;
    }
    return $data;
    // print_r($sqlex);
    // exit;
}
    public function delete($table,$id)
    {
        $SQL = "DELETE FROM $table WHERE id = $id";
        // echo $SQL;
        // echo "$table $id";
        // exit;


        $this->connection->query($SQL);
        // header("location:$_SERVER[PHP_SELF]");

        // header
    }


public function select($table)
{
    $SQL = "SELECT * FROM $table";
    // echo $SQL;
    // exit;


    $SQLEX = $this->connection->query($SQL);
    // print_r($SQLEX);
    // exit;
    

    if($SQLEX->num_rows > 0)
    {

        // $data = $SQLEX->fetch_object();
        // $data = $SQLEX->fetch_all();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        while($data = $SQLEX->fetch_object())
        {
            $datas[] = $data;
        }
        // echo "<pre>";
        // print_r($datas);

        return $datas;

        // exit;

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

            $this->connection->query($sql);
            header("location:login");
        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        echo "</pre>";
    } 




    public function login($data)
    {
        if(isset($data['login_btn']))
        {
            print_r($data);
            // echo "inside if";



            $SQL = "SELECT * FROM users WHERE (email = '$data[username]' OR username = '$data[username]')
                AND password = '$data[password]';";
        // echo $SQL;    
          $sqlex = $this->connection->query($SQL);
        //   echo "<pre>";
        //   print_r($sqlex);
        //   echo "</pre>";
        
        if($sqlex->num_rows > 0)
        {
            $userdata = $sqlex->fetch_object();
            // echo "Login Success";
            // echo "<pre>";
            // print_r($userdata);
            // echo "</pre>";
            if($userdata->role_as == 1)
            {
                echo "Admin side";
                header("location:admin-dashboard");
            }
            else
            {
                // echo "User side";
                header("location:home");
            }

        }
        else
        {
            // echo "Login Failed";
            echo "<script> alert('Invalid Username or Password')  </script>";

        }
    
    }
        else
        {
            // echo "inside else";

        }
    }
}


// $model = new model;
// $model->register("Save Data");
// $model->register("<br>Update Data");













?>