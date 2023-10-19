@extends('layouts.frontend.app')

@section('title')
{{$category->meta_title}}
@endsection

@section('meta_keyword')
{{$category->meta_keyword}}
@endsection

@section('meta_description')
{{$category->meta_description}}
@endsection


@section('content')


<livewire:frontend.product.index :category="$category"  />
{{-- <livewire:frontend.product.index :products="$products" :category="$category"  /> --}}

@endsection