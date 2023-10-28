
<div>

    
    <form action="add" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required   placeholder="Enter Product Name">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Product Price</label>
            <input type="text" class="form-control" id="price" name="price" required  placeholder="Enter Product Price">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <!-- <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Product Name"> -->
            <textarea name="description" class="form-control" id="description"required  cols="30" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Product Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" required  placeholder="Enter Product quantity">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Product Image</label>
            <input type="file" class="form-control" accept="image/*" id="image" required name="image">
        </div>
        
        
        
        
        <div class="mt-4">

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>