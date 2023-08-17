<?php


$password = "jaimin";
// $password = "5548216894";


// echo md5($password);


echo base64_encode($password);
echo "<br>";
echo base64_decode("amFpbWlu");

// decode


?>