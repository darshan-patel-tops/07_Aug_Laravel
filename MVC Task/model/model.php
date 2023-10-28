<?php






class model
{

    public $connection;
    public function __construct()
    {
        try {
            //code...
            $this->connection = new mysqli("localhost","root","","mvc_crud"); 
            // echo "Connection success";
        } 
        catch (\Throwable $th) 
        {
            // echo "Connection failed";
            //throw $th;
        }
        // echo "from model";
    }

public function insert($tbl,$data,$image)
{
    echo "<pre>";
    array_pop($data);
    // print_r($data);
    // print_r($tbl);
    // print_r($image);
    

    $from = $image['image']['tmp_name'];
    $to = "asset/upload/".time().$image['image']['name'];
    move_uploaded_file($from,$to);
    // $keys =  array_keys($data[0]);
    $keys1 = implode(',',array_keys($data));
    $value1 = implode("','",array_values($data));
    $keys2 = implode(',',array_keys($image));
    // $keys2 = implode(',',array_keys($data[1]));
    // print_r($keys1);
    // print_r($value1);
    // print_r($keys2);
    $sql = "INSERT INTO $tbl ($keys1,$keys2) VALUES('$value1','$to')";
    echo $sql;
    $sqlex = $this->connection->query($sql);
    // print_r($sqlex);
    if($sqlex == 1)
    {
        header("location:home");
    }
    else
    {
        echo "something went wrong";
    }





}



public function select($tbl)
{

    $sql = "SELECT * FROM $tbl";

    $sqlex = $this->connection->query($sql);
    // print_r($sqlex);
    if($sqlex->num_rows>0)
    {
        while ($all = $sqlex->fetch_object()) 
        {
            $data[] = $all;
        }
        // $data = $sqlex->fetch_object();
        // $data = $sqlex->fetch_all();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        return $data;
    }


}

}











?>