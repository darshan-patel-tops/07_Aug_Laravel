<?php

//? is used for query string
echo "<pre>";
print_r($_REQUEST); 
echo "</pre>";

?>


<body class="container">  
  <div class="login-container">
    <div class="login-content">
      <h1 class="welcome-text">Welcome</h1>
      <form class="login-form" method="post">
        <input type="text" placeholder="Name" class="input-field" name="name">
        <input type="text" placeholder="Username" class="input-field" name="username">
        <input type="text" placeholder="Email" class="input-field" name="email">
        <input type="password" placeholder="Password" class="input-field" name="password">
        <button type="submit" class="login-button">Register</button>
      </form>
    </div>
  </div>
</body>


<style>
    body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #222;
}

.login-container {
  background-color: #333;
  padding: 20px;
  border-radius: 40px;
  box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.3);
}

.login-content {
  text-align: center;
  padding: 20px;
}

.welcome-text {
  font-family: "Helvetica Neue", sans-serif;
  font-size: 30px;
  color: #fff;
  margin-bottom: 20px;
}

.input-field {
  display: block;
  width: auto;
  padding: 20px;
  margin: 20px auto;
  border: 1px solid #555;
  border-radius: 15px;
  background-color: #444;
  color: #fff;
}

.login-button {
  display: block;
  width: 100%;
  max-width: 100px;
  padding: 20px;
  margin: 20px auto 10px;
  border: none;
  border-radius: 500px;
  background-color: #3565C5;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.4s ease;
}

.login-button:hover {
  background-color: #DD9292;
  box-shadow: 15px;
  box-shadow: 0px 0px 10 rgba(0, 0, 0, 0.3);
}

.container {
  height: 100vh;
  width: 100%;
  background: linear-gradient(45deg,#D5A4AA,#ACA8CC,#C7AC8F,#FCFCFC);
  background-size: 300% 300%;
  animation: color 45s ease-in-out infinite;
}

@keyframes color {
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0 50%;
  }
}
</style>