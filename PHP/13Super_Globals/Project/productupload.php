<?php





require_once("header.php");


if(isset($_REQUEST['btn']))
{

    echo "<pre>";
    print_r($_REQUEST);

    // $files = $_FILES;
    // print_r($files);
    if($_FILES['image']['error'] == UPLOAD_ERR_OK)
    {
        // echo "Inside if";
        // print_r($files['error']);
        // print_r($files['tmp_name']);
        $filename = $_FILES['image']['tmp_name'];
// print_r($_FILES);
// print_r($_FILES['image']['tmp_name']);
        $destination = "images/.$filename";
        move_uploaded_file($filename,$destination);
    }
    else
    {
        echo "Something went wrong file was not moved";
    }
    
    // $destination = 
    // move_uploaded_file($_FILES['tmp_name'],"images");
    echo "</pre>";
    
}



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