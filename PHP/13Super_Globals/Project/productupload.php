<?php

require_once("header.php");
echo "<pre>";
// print_r($_REQUEST);
// print_r($_FILES);
echo "</pre>";

if(isset($_FILES["image"]['error']))
{
    // echo"inside if"; //debugging statements
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    $from =  $_FILES["image"]["tmp_name"];
    $path = "images/";
    $destination = $path.uniqid().$_FILES["image"]["name"];

    if(move_uploaded_file($from,$destination))
    {
        $_SESSION["products"][] = 
        [
            "price"=>$_REQUEST['price'],
            "image"=>$destination
        ];
        // $_SESSION["products"][] = [$cartdata];
        echo "<pre>";
        echo "</pre>";
    }
    else
    {
        echo "Something went wrong try again";
}



    // echo "Success";
    
}
else
{
    // echo"Something went wrong";
    
    
}
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>
<center class="mt-5 mb-5">
    
    <h1>Product Page</h1>
</center>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="class px-5 col-md-6">
        
    <input type="text" name="price" placeholder="Enter Price" class="form-control mt-3 mb-3">
    <input type="file" name="image" placeholder="Enter Price" class="form-control">
    <button class="btn btn-lg btn-success mt-3" name="btn">Save</button>
</div>


</form>


<?php require_once("footer.php");?>