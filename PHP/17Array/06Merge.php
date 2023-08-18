<?php


echo "<pre>";

$arr1 = array("Name"=>"Peter","Strong"=>"Hulk","Sharp"=>"Hawkeye");
$arr2 = array("Name"=>"Captain America","something"=>"Thor","Sharp"=>"Ironman");

print_r($arr1);
print_r($arr2);

print_r(array_merge($arr1,$arr2));



?>