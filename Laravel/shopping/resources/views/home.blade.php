@extends('layouts.app')

{{-- <h1>Home Page</h1> --}}

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
<h1>Home Page</h1>


@endsection

{{-- <h1>Home Page13</h1> --}}
