<?php
echo "<pre>";
echo "get method<br>";
print_r($_GET);

// ECHO "<BR>";
// ECHO "<BR>";
// ECHO "<BR>";
// echo $_REQUEST['name'];
// $name = $_REQUEST['name'];
// echo $name;
// ECHO "<BR>";
// ECHO "<BR>";
// ECHO "<BR>";
echo "post method<br>";
print_r($_POST);
echo "request method<br>";
print_r($_REQUEST);
echo "</pre>";





?>




<form action="" method="post">


<input type="text" placeholder="enter name" name="name">
<input type="text" placeholder="enter email" name="email">
<input type="password" placeholder="enter password" name="password">
<button type="submit">Submit</button>


</form>