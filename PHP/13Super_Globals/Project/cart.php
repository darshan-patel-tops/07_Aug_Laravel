<?php


require_once("header.php");
// print_r($_REQUEST);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<h1>Cart Page</h1>



<?php

    $carts = $_SESSION['cartdata'];

foreach($carts as $cart)
{   
    echo "<form method='post'>";
    echo "<center>";
    echo "<div class='mt-4 mb-2'>";
    echo "<h1>$cart[price]</h1>";
    echo "</div>";
    echo "</center>";
}
?>

<center>
<form action="" method="post">
    <button class="btn btn-primary" name="clearcart">Procced to payment</button>
</form>
</center>

</form>

<?php 

?>




<?php

// print_r($_REQUEST);
if(isset($_REQUEST['clearcart']))
{
    unset($_SESSION['cartdata']);
    // unset($_SESSION['products']);
}
else
{
    echo "<h1>No Product Added To Cart</h1>";
}


require_once("footer.php");


?>