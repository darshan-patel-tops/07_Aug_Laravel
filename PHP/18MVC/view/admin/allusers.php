<?php
// echo "<pre>";
// print_r($fetch);

?>


<!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">

              <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Image</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
          <tbody>
          
          <?php
          if(isset($fetch))
          {


          foreach($fetch as $value)
          { ?>
          <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->name ?></td>
            <td><?php echo $value->email ?></td>
            <td><?php echo $value->username ?></td>
            <td><img src="" alt="No Profile Picture Found"><?php echo $value->image ?></td>
            <td><?php echo $value->password ?></td>
            <td><?php echo $value->role_as ?></td>
            <td>
              <button class="btn-primary btn-sm">Update</button>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->id ?>" class="mt-2 btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          <?php } 
                    }
                    else 
                    {
                      echo "<tr>
                      <th style='text-align:center;' colspan=8>No Data Found</th>
                      </tr>";
                    }
 ?>
        </tbody>
</table>

              </div>
            </div>
 </div>

 <?php
//  print_r($_REQUEST);
 ?>