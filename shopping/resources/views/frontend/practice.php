

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
NAME: <input type="text" name="fname">
<button type="submit">SUBMIT</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = htmlspecialchars($_REQUEST['fname']);
	if(empty($name)){
		echo "Name is empty";
	} else {
		echo $name;
	}
}
?>
</body>
</html>

<?php 

// echo "<pre>";
    // dd($_ENV);
    // dd($GLOBALS);
    // dd($_SERVER);
    // dd($_REQUEST);
    // dd($_POST);
    // dd($_GET);
    // print_r($_FILES);
    // dd($_ENV);
    // dd($_COOKIE);
    // dd($_SESSION);
// echo "</pre>";

?>