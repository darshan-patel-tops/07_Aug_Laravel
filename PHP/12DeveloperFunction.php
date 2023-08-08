<?php

//it is used for debugging
$array = ["pathik","saurav","shreynash","ankit","jaimin",100,100.100,false,true];


//Associative Array
//comes with key and value pair
$array2 = ["name"=>"ankit","age"=>27,"education"=>"B.com","salary"=>10000000];


foreach($array2 as $key => $value)
{
    echo "Key is $key and value is $value <br>";
}

// echo $array;

echo "<pre>";
print_r($array);
print_r($array2);

// var_dump($array);
// var_export($array);


// echo "hello";
// var_representation($array);
echo "</pre>";











?>