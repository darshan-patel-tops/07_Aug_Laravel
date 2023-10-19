@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    Add Products
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

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
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
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="slug">Product Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="brand">Select Brand</label>
                            <select name="brand"  class="form-control">

                                @foreach ($brands as $brand)
                                <option value="{{$brand->name}}">{{$brand->name}}</option>
                                @endforeach
                            
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="small_description">Small Description</label>
                            <textarea name="small_description" id="small_description" class="form-control" rows="2"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description"> Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>

                    </div>

                    <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">

                        
                        <div class="mb-3">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control">
                        </div>

                        
                        <div class="mb-3">
                            <label for="meta_keyword">Meta keyword</label>
                            <input type="text" name="meta_keyword" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-control" rows="4"></textarea>
                        </div>

                    </div>

                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="original_price">Original Price</label>
                                <input type="text" name="original_price" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="selling_price">Selling Price</label>
                                <input type="text" name="selling_price" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="trending">Trending</label>
                                <input type="checkbox" name="trending" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="featured">Featured</label>
                                <input type="checkbox" name="featured" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                <input type="checkbox" name="status" >
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade  border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="product_image">Product Image</label>
                            <input type="file" multiple name="image[]" class="form-control">
                        </div>
                    </div>

                    <div class="tab-pane fade  border p-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="product_image">Product Color</label>
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
                    </div>

                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                  </div>
                </form>

                </div>

        </div>
    </div>
</div>


@endsection