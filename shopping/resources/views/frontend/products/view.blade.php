@extends('layouts.frontend.app')

@section('title')
{{$product->meta_title}}
@endsection

@section('meta_keyword')
{{$product->meta_keyword}}
@endsection

@section('meta_description')
{{$product->meta_description}}
@endsection


@section('content')


<livewire:frontend.product.view :product="$product" :category="$category"  />
{{-- <livewire:frontend.product.index :products="$products" :category="$category"  /> --}}

@endsection