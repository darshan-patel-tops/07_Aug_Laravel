<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div id="display">

</div>


<script>


console.log(1);
var num1 = 5;
var num2 = 10;
console.log(num1+num2);


// document.getElementById("display").innerHTML = "hello" ;
// document.getElementById("display").innerHTML = "num1 value is "+num1+"num2 value is "+num2 ;
document.getElementById("display").innerHTML = `
<h1>num 1 is : ${num1}
<br>
num 2 is : ${num2}
<br>
total is : ${num1+num2}
<br></h1>


` ;

</script>


</body>
</html>