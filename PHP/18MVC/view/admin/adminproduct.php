<?php
// echo "<pre>";
// print_r($fetch);

?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="mb-3">
                <form action="add-product" method="post">
                    <button class="btn  btn-primary float-end">Add Product</button>
                </form>
            </div>

              <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
          <tbody>
          
          <?php
          if(isset($products))
          {


          foreach($products as $value)
          { ?>
          <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->name ?></td>
            <td><?php echo $value->price ?></td>
            <td><?php echo $value->description ?></td>
            <td><img src="../<?php echo $value->image ?>" alt="No Product Image Found" height="70" width="70px"></td>
            <td>
              <form action="update-product" method="post">

                <button class="btn-primary btn-sm" name="update_btn" value="<?php echo $value->id; ?>">Update</button>
              </form>
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