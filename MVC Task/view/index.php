
<div class="mt-5 mb-5">
  <div class="mb-3 float-end">
<a href="add-product">

  <button type="button" class="btn btn-primary">Add Product</button>
</a>
  </div>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">image</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php  foreach ($data as $key => $value) 
      {
        // echo "vaue";
        // print_r($value);
        ?>

      <tr>
        <td><?php echo $value->id; ?></td>
        <td><?php echo $value->name; ?></td>
        <td><?php echo $value->price; ?></td>
        <td><?php echo $value->quantity; ?></td>
        <td>
          <img src="<?php echo $value->image; ?>" height="100px" width="100px" alt="">
        </td>
        <td><?php echo $value->description; ?></td>
        <td>
          <form action="update-product" method="post">

          <button name="id" value="<?php echo $value->id; ?>" class="btn btn-primary">Update</button>
              
          </form>
          <form action="delete-product" method="post">

          <button name="id" value="<?php echo $value->id; ?>" class="btn btn-danger">Delete</button>
              
          </form>
        </td>
      </tr>
      
      <?php } ?>
      
    </tbody>
  </table>
</div>