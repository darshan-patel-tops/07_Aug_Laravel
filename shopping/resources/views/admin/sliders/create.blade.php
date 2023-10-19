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
                    Add Sliders
                      <a href="{{url('/admin/sliders')}}" class="btn btn-primary float-end">Back </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/sliders/save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title">Slider Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description">Slider Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="title">Slider Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-success float-end">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection