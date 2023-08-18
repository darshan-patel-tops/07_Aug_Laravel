<?php


echo "<pre>";
$arr1 = array("Name"=>"John","Age"=>"bussiness","Job"=>"Engineer");
$arr2 = array("Surname"=>"Biden","Age"=>"bussiness","Country"=>"USA");

print_r($arr1);
print_r($arr2);


print_r(array_diff($arr2,$arr1));
print_r(array_diff_key($arr2,$arr1));
print_r(array_diff_assoc($arr2,$arr1));





?>