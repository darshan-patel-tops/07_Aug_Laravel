<?php


require_once("header.php");
print_r($_REQUEST);

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
    <button class="btn btn-primary" name="clearcart">Procced to payment</button>
</center>

</form>

<?php 

?>




<?php

require_once("footer.php");


?>