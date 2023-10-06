@extends('layouts.app')

{{-- <h1>Home Page</h1> --}}
{{-- {{dd($products)}} --}}
@section('kuchbhi')
@if (session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
  </div>
@endif

@if (session('status'))
<div class="alert alert-danger" role="alert">
    {{ session('status') }}
  </div>
@endif

@foreach ($products as $item)
  <h5>{{ $item->id }}</h5>
  <h5>{{ $item->price }}</h5>
  <h5>{{ $item->quantity }}</h5>
@endforeach


{{--
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1>
<h1>Home Page</h1> --}}


@endsection

{{-- <h1>Home Page13</h1> --}}
