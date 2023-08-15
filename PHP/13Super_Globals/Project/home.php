<?php

// echo "<pre>";
// $_ENV = getenv();
// print_r($_ENV);
// print_r($_SERVER);
// echo "</pre>";


// session_start();

// require('header1.php');
// require('header.php');
// require('header.php');
// require('header.php');
// require('header.php');
// require('footer.php');
// require_once('header.php');
// require_once('header.php');
// require_once('header.php');
// require_once('header.php');
require_once('header.php');
// require_once('register1.php');


// include('header.php');
// include('header.php');
// include('header1.php');
// include('header.php');
// include('header.php');

// include_once('header.php');
// include_once('header.php');
// include_once('header.php');
// include_once('header.php');
// include_once('header.php');

echo "<pre>";
// print_r($_SESSION["products"]);
// print_r($_SESSION["products"][]);
echo "</pre>";
?>

<?php





if(isset($_REQUEST["add"]))
{
    echo "<pre>";
    // print_r($_REQUEST);
    
    
    // echo "inside if";
    
    $_SESSION["cartdata"][] = ["price"=>$_REQUEST['price']];
}
echo "<pre>";
// print_r($_SESSION['cartdata']);
print_r($_SESSION);
echo "</pre>";


?>

<h1>Home page</h1>

<section>
<?php

$products = $_SESSION["products"];
foreach($products as $product)
{
    // print_r($product);
 ?>
 <center>
    <form action="" method="post">

        <div class="card mt-4 mb-4" style="width: 18rem;">
            <img src="<?php echo $product['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <input type="hidden" name="price" value="<?php echo $product['price']?>">
                <h4 class="card-text"><?php echo $product['price']?></h4>
                <button class="btn btn-success " name="add">Add to cart</button>
            </div>
        </div>
        
    </form>
</center>
<?php } ?>    
</section>


<?php
require_once('footer.php');
?>