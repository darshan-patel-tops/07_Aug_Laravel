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
                    Update Sliders
                      <a href="{{url('/admin/sliders')}}" class="btn btn-primary float-end">Back </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/sliders/'.$slider->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="mb-3">
                        <label for="title">Slider Title</label>
                        <input type="text" name="title" class="form-control" value="{{$slider->title}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description">Slider Description</label>
                        <textarea name="description" class="form-control" rows="3">{{$slider->description}}</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="title">Slider Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{asset("/$slider->image")}}"  style="widht:70px; height:70px;" alt="Slider Image">
                    </div>
                    
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked':''}}>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-success float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection