<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    

<h1>Check Data</h1>


<form action="" method="post">


<input type="text" name="username" id="username" placeholder="Enter Your Username" onblur="checkusername()">
<div id="username_msg">

</div>
<input type="text" name="name" id="name" placeholder="Enter Your Name" >
<input type="text" name="password" id="password" placeholder="Enter Your Password" >
<button>Submit</button>
</form>



<script>



var value = "ADMIN"
console.log("Welcome To check Data Lecture ",value);


function checkusername()
{
    console.log("Inside function");

    // console.log();
    var username = ""
    username = document.getElementById("username").value;
    // username = document.getElementsByName("username").value;

    console.log(username);


    var check ="admin"

    if(username == check)
    {
        console.log("This Username is Already Taken");
        document.getElementById("username_msg").innerHTML = "<p class='btn btn-danger'>This Username is Already Taken</p>"
    }
    else
    {
        console.log("This Username is Not  Taken");
        document.getElementById("username_msg").innerHTML = "<p class='btn btn-primary'>This Username is Not Taken</p>"
    }

}




</script>

</body>
</html>