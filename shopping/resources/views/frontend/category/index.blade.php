@extends('layouts.frontend.app')

@section('title','Category Page')
    

@section('content')


<section class="my-lg-14 my-8">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="mb-8">
            <h3 class="mb-0">Shop by Category</h3>
          </div>
        </div>

      </div>

      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-6">

@forelse ($categories as $category)
    
    <div class="col"> <a href="{{url('/category/'.$category->slug)}}" class="text-decoration-none text-inherit">
        <div class="card card-product">
            <div class="card-body text-center py-8">
                <img src="/uploads/category/{{$category->image}}"  height="100px" width="100px"
                 alt="Grocery Ecommerce Template" class="mb-3">
                <div class="text-truncate">{{$category->name}}</div>
            </div>
        </div>
        </a>
    </div>

    @empty

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-6">
      <h2>No Category Found...Come Back Later For More</h2>
    </div>

@endforelse

</div>


    </div>
  </section>


@endsection