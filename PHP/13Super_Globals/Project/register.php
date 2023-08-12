


<?php

//? is used for query string
require_once('header.php');

if(isset($_REQUEST['reg_btn']))
{

  // echo "Request Data";
  // echo "<pre>";
  // print_r($_REQUEST); 
  // echo "</pre>";
  
  // mail("darshan.patel.tops@gmail.com","Check mail","hello from check mail");
  setcookie("username",$_REQUEST['username'],time()+3600,"");
  setcookie("email",$_REQUEST['email'],time()+3600,"");
  setcookie("password",$_REQUEST['password'],time()+3600,"");
  setcookie("name",$_REQUEST['name'],time()+3600,"");
  
  
  // echo "Cookie data";
  // echo "<pre>";
  // print_r($_COOKIE['username']);
  // echo "<br>";
  // print_r($_COOKIE['email']);
  // echo "<br>";
  // print_r($_COOKIE['password']);
  // echo "<br>";
  // print_r($_COOKIE['name']);
  // echo "<br>";
  // // print_r($_COOKIE);
  // echo "</pre>";
  header("location:login.php");
  
}




?>

<h1>Register Page</h1>
<div class="col-md-6 center d-flex align-items-center py-5 px-5" style="margin-left: 500px;">

  <form method="post">
    
  <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control mt-3" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1 " class="mt-3">Username</label>
    <input type="text" class="form-control mt-3" id="username" name="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1 " class="mt-3">name</label>
    <input type="text" class="form-control mt-3" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1 " class="mt-3">Password</label>
    <input type="password" class="form-control mt-3" id="password" name="password" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-success mt-3" name="reg_btn">Register</button>
</form>

</div>