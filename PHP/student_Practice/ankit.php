<?php

//? is used for query string
echo "<pre>";
print_r($_REQUEST); 
echo "</pre>";

?>!

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <style>html {
    background-image: url("https://i.ibb.co/M1czT9x/wallpaper.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

h1 {
    font-family: 'Kanit', sans-serif;
    color: #fff;
    font-size: 40px;
}

#login_form {
    width: 408px;
    height: 650px;
    border-color: #fff;
    border-style: groove;
    border-radius: 25%;
    text-align: center;
    margin: auto;
    margin-top: 65px;
    backdrop-filter: blur(10px);
    transition: 0.3s;
}

#login_form:hover {
    box-shadow: 6px 10px 10px 10px rgba(255, 255, 255, 0.781);
}

h2 {
    font-family: 'Aoboshi One', serif;
    color: #fff;
    font-size: 25px;
    font-style: italic;
    text-align: center;
    cursor: pointer;
}

input {
    padding: 27px 23px;
    border-radius: 25px;
    background: inherit;
    border-style: none;
    box-shadow: 10px 10px 40px 20px rgba(0, 0, 0, 0.377);
    font-family: 'Work Sans', sans-serif;
    text-align: center;
    font-size: 19px;
    color: #fff;
    margin-bottom: 25px;
    transition: 0.2s;
}

input:hover {
    box-shadow: 10px 10px 40px 20px rgba(0, 0, 0, 0.616);
}

::placeholder {
    color: #ffffffa8;
    font-family: 'Work Sans', sans-serif;
    font-size: 20px;
    text-align: center;
    transition: 0.2s;
}

button {
    padding: 25px 40px;
    color: #000;
    background-color: #fff;
    border-style: none;
    border-radius: 25%;
    font-family: 'Nunito', sans-serif;
    font-size: 20px;
    transition: 0.3s;
}

button:hover {
    background-color: rgb(142, 196, 48);
    font-size: 24px;
    transform: scale(1, 1);
    box-shadow: 6px 6px 6px 6px rgba(255, 255, 255, 0.747);
    color: #fff;
    cursor: pointer;


}</style>
    <h2>YOUR LOGO</h2>
   <div id="login_form">
    <h1>Sign in</h1>
    <form action=""method="post">

        <input type="text" placeholder="name"name="name"><br>
        <input type="text" placeholder="user name"name="user name"><br>
        <input type="text" placeholder="email"name="email"><br>
        <input type="password" placeholder="Password"name="password"><br>
        <button>Log in</button>
    </form>
   </div>
</body>

</html>