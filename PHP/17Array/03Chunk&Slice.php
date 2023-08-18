<?php


echo "<pre>";


$arr1 = array("BMW"=>"9R 900","Volvo"=>"XC90","Mercedeas"=>"S Class","Ferrari"=>"GT Spider","Audi"=>"A8");

print_r($arr1);


print_r(array_chunk($arr1,2));



print_r(array_slice($arr1,3));




?>