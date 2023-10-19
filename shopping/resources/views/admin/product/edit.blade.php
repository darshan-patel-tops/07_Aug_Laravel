@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    Edit Products
                      <a href="{{url('/admin/product')}}" class="btn btn-primary float-end">Back </a>
                </h3>
            </div>
            <div class="card-body">

                @if($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

                <form action="{{url('admin/product/'.$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')


                <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">

                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                       aria-controls="home-tab-pane" aria-selected="true">Home</button>
                    </li>

                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" 
                      aria-controls="seotag-tab-pane" aria-selected="false">SEO Tags</button>
                    </li>

                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" 
                      aria-controls="details-tab-pane" aria-selected="false">Details</button>
                    </li>

                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" 
                      aria-controls="image-tab-pane" aria-selected="false">Product Images</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" 
                        aria-controls="image-tab-pane" aria-selected="false">Product color</button>
                      </li>

                  </ul>
                  <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        
                        <div class="mb-3">
                            <label for="category">Select Category</label>
                            <select name="category_id"  class="form-control">

                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected':''}}>
                                    {{$category->name}}</option>
                                @endforeach
                            
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="slug">Product Slug</label>
                            <input type="text" name="slug" value="{{$product->slug}}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="brand">Select Brand</label>
                            <select name="brand"  class="form-control">

                                @foreach ($brands as $brand)
                                <option value="{{$brand->name}}" {{$brand->name == $product->brand ? 'selected':''}}>
                                    {{$brand->name}}</option>
                                @endforeach
                            
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="small_description">Small Description</label>
                            <textarea name="small_description" id="small_description" class="form-control" rows="2">
                                {{$product->small_description}}
                                </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description"> Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">
                                {{$product->description}}
                            </textarea>
                        </div>

                    </div>

                    <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">

                        
                        <div class="mb-3">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title"  value="{{$product->meta_title}}" class="form-control">
                        </div>

                        
                        <div class="mb-3">
                            <label for="meta_keyword">Meta keyword</label>
                            <input type="text" name="meta_keyword"  value="{{$product->meta_keyword}}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-control" rows="4">
                                {{$product->meta_description}}
                            </textarea>
                        </div>

                    </div>

                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="original_price">Original Price</label>
                                <input type="text" name="original_price"  value="{{$product->original_price}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="selling_price">Selling Price</label>
                                <input type="text" name="selling_price"  value="{{$product->selling_price}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="trending">Trending</label>
                                <input type="checkbox" name="trending" {{$product->trending == '1' ? 'checked':''}} >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="featured">Featured</label>
                                <input type="checkbox" name="featured" {{$product->featured == '1' ? 'checked':''}} >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                <input type="checkbox" name="status" {{$product->status == '1' ? 'checked':''}}>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade  border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="product_image">Product Image</label>
                            <input type="file" multiple name="image[]" class="form-control">
                        </div>
                        <div>
                            @if($product->productimage)
                            <div class="row">
                                @foreach ($product->productimage as $image)
                                <div class="col-md-2">
                                    <img src="{{asset($image->image)}}" style="width: 100px;height:100px;"
                                    class="me-4 border" alt="img">
                                    <a href="{{url('admin/product-image/'.$image->id.'/delete')}}" class="d-block">Remove</a>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <h6>No Images Found</h6>
                            @endif
                        </div>
                        
                  

                    </div>
                    <div class="tab-pane fade  border p-3" id="color-tab-pane" role="tabpanel" tabindex="0">
                        <div class="mb-3">
                            <h4>Add Product Color</h4>
                            <label for="product_color">Select Color</label>
                        <hr/>
                            <div class="row">
                                @forelse ($colors as $color)
                                <div class="col-md-3">
                                    <div class="p-2 border mb-3">

                                        Color: <input type="checkbox" name="colors[{{$color->id}}]" value="{{$color->id}}" >{{$color->name}}
                                        <br>
                                        Quantity: <input type="number" name="colorquantity[{{$color->id}}]" style="widht:70px; border:1px solid">
                                    </div>
                                </div>
                                    
                                @empty
                                    <div class="col-md-12">
                                        <h1>No Colors Found</h1>
                                    </div>
                                @endforelse

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table tablre-bordered">
                                <thead>
                                    <tr>
                                        <th>Color Name</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->productcolors as $prodcolor)
                                        
                                    <tr class="prod-color-tr">
                                        <td>
                                        @if($prodcolor->color)    
                                            {{$prodcolor->color->name}}
                                        @else
                                        No Color Found
                                        @endif 
                                        </td>
                                        <td>
                                            <div class="input-group mb-3" style="width:150px">
                                                <input type="text" value="{{$prodcolor->quantity}}" class="productcolorquantity form-control form-control-sm">
                                                <button type="button" value="{{$prodcolor->id}}" class="updateproductcolorbtn btn btn-primary btn-sm text-white">Update</button>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" value="{{$prodcolor->id}}" class="deleteproductcolorbtn btn btn-danger btn-sm text-white">Delete</button>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary float-end">Update Product</button>
                      </div>
                  </div>


                </form>

                </div>

        </div>
    </div>
</div>


@push('script')
    <script>

        $(document).ready(function(){
        
                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                }); 

            $(document).on('click','.updateproductcolorbtn',function(){

                var product_id = "{{$product->id}}";
                var prod_color_id = $(this).val();
                var qty = $(this).closest('.prod-color-tr').find('.productcolorquantity').val();
              
                if(qty <= 0 )
                {
                    console.log("insinde if");
                    alert('Quantity Is Required');
                    return false;
                }
                
                var data = {
                    'product_id':product_id,
                    'prod_color_id':prod_color_id,
                    'qty':qty,
                };
                $.ajax({
                    type:"POST",
                    url:"/admin/product-color/"+prod_color_id,
                    data:data,
                    success:function(response)
                    {
                        alert(response.message)
                    }
                    
                });
            });

            $(document).on('click','.deleteproductcolorbtn',function()
            {
                var prod_color_id = $(this).val();
                var thisclick = $(this);

                $.ajax({
                    type:"get",
                    url:"/admin/product-color/"+prod_color_id+"/delete",
                    success: function(response)
                    {
                        thisclick.closest('.prod-color-tr').remove();
                        alert(response.message);
                    }
                });
            });
        });
    </script>
@endpush


@endsection


{{-- @section('scripts')
    
    <script>

        // console.log("hey");
        // $(document).ready(function(){
        
        //     $(document).on('click','.updateproductcolorbtn',function(){

        //         var product_id = "{{$product->id}}";
        //         var prod_color_id = $(this).val();
        //         var qty = $(this).closest('.prod-color-tr').find('.productcolorquantity').val();
        //         alert(product_id);
        //         console.log("test",res);
                
                
        //     });
        //     $.ajax({
        //         type:"post"
        //     });
        // });
    </script>

@endsection --}}