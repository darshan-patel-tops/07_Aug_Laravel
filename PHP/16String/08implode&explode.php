<?php





$line = "Hello this is a line of string";

echo "<pre>";
print_r(explode(" ",$line));
$arr = explode(" ",$line);
print_r(implode(",",$arr));
// join() //Alias of implode 





?>