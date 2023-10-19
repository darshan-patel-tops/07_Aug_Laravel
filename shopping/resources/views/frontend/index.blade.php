@extends('layouts.frontend.app')

@section('title','Home Page')


@section('content')

<section class="mt-8">
    <div class="container">
        <div class="hero-slider ">

            @foreach ($sliders  as $key => $slider)


            <div    style="background: url({{$slider->image}})no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center" >
                    <span class="badge text-bg-warning">{{$slider->title}}</span>

                    <h2 class="text-dark display-5 fw-bold mt-4">{{$slider->title}}</h2>
                    <p class="lead">{{$slider->description}}</p>
                    <a href="#!" class="btn btn-dark mt-3">Shop Now for discount<i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>
            </div>

            @endforeach
            {{-- <div class=" " style="background: url(assets/images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                    <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span class="text-primary">$100</span></h2>
                    <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
                    </p>
                    <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>

            </div> --}}

        </div>
    </div>
</section>
<livewire:frontend.index />

@endsection
