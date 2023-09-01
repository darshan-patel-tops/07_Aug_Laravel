<?php 
echo "<pre>";
print_r($response);
echo "</pre>";


?>




<form action="" method="post">

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $response->name;  ?>">
  </div>

  
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $response->email;  ?>">
  </div>

  
  <div class="form-group">
    <label for="password">password</label>
    <input type="text" class="form-control" id="password" name="password" value="<?php echo $response->password;  ?>">
  </div>

  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $response->username;  ?>">
  </div>

  
  
  <button type="submit" class="btn btn-primary" name="update" value="<?php echo $response->id; ?>">Submit</button>
</form>