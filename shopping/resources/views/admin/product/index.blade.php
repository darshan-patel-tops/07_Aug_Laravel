@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        
@if(session('message'))
<h1 class="alert alert-success"> {{session('message')}}</h1>
@endif

        <div class="card">
            <div class="card-header">
                <h3>
                    All Products
                      <a href="{{url('/admin/product/create')}}" class="btn btn-primary float-end">Add Product </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->status == '1' ? 'Hidden':'Visible'}}</td>
                            {{-- <td><img src="/uploads/product/{{$product->image}}" alt="product Image" height="40px" width="40px"></td> --}}
                            <td>
                            <a href="{{url('/admin/product/'.$product->id.'/edit')}}"  class="btn btn-success">Edit</a>
                            <a href="{{url('/admin/product/'.$product->id.'/delete')}}" onclick="return confirm('Are You Sure You Want To Delete This?')" 
                            class="btn btn-danger">Delete</a>
                                {{-- {{$product->name}} --}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection