<?php

//FIFO - First In First Out  -- Queue Memory
//LIFO - Last In First Out   -- Stack Memory

echo "<pre>";
$arr = array("Name"=>"Admin","Age"=>20,"City"=>"Ahmedabad");

print_r($arr);


array_pop($arr);
array_pop($arr);

print_r($arr);



$arr2 = array(1,2,3,4,5);

print_r($arr2);

array_push($arr2,13);
print_r($arr2);

array_push($arr2,1010,200);
print_r($arr2);
// array_pop($arr);

// print_r($arr);

// array_pop($arr);

// print_r($arr);

unset($arr2[7]);
print_r($arr2);
?>