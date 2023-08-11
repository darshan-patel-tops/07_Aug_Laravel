<?php

//? is used for query string
require_once('header.php');

if(isset($_REQUEST['login']))
{
// echo "Inside if";


    if($_REQUEST['email'] == $_COOKIE['email'] && $_REQUEST['password'] == $_COOKIE['password'])
    {
        // echo "Login Success";
    
        header("location:home.php");
    }
    else
    {
        // echo "Login Failed";
        echo "<script>alert('Username or password is incorrect')</script>";

    }
  // echo "Request Data";
  echo "<pre>";
//   print_r($_REQUEST); 
  echo "</pre>";
  
  
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
//   header("location:login.php");
  
}




?>

<h1>Login Page</h1>
<div class="col-md-6 center d-flex align-items-center py-5 px-5" style="margin-left: 500px;">

  <form method="post">
    
  <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control mt-3" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  
 
  <div class="form-group">
    <label for="exampleInputPassword1 " class="mt-3">Password</label>
    <input type="password" class="form-control mt-3" id="password" name="password" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-success mt-3" name="login">Login</button>
</form>

</div>