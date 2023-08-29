<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h1>Variables</h1>


<script>

//Global Scope
var username = "Admin123"
username = "user123"   //Re-Assign
var username = "Ankit" //Re-Declaration

console.log("Var function");
console.log(username);


console.log("Let function");

//Block Type
let password = 123456
password = 0987654321  //Re-Assign
// let password = 1  //You Cannot Redeclare
console.log(password);



console.log("Const Function");
const name = "ankit"
// name = "jaimin" // Cannot be Re-Assign
// const name = "jaimin" // Cannot be Re-Declared
console.log(name);



</script>
</body>
</html>