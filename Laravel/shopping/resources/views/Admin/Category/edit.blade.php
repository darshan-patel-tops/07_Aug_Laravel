@extends('layouts.app2')



@section('content')
{{-- {{ dd($data) }} --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Inputs</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/update-category/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" value="{{ $data->name }}" id="name" placeholder="Enter Name of Category" required class="form-control">
                        </div>
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Description</label>
                        <div class="col-md-10">
                            <textarea name="description" id="description" class="form-control" cols="30" rows="3">{{$data->description}}"</textarea>
                            {{-- <input type="text"  placeholder="Enter Description of Category" required > --}}
                        </div>
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image" id="image" accept="image/*" placeholder="Enter Name of Category" class="form-control">
                            <img src="/{{$data->image  }}" height="100px" width="100px" alt="">
                        </div>
                    </div>
                    <div class="input-block mb-3 row">
                        @if ($data->visible == true)
                        <label class="col-form-label col-md-2">Visible</label>
                        <div class="col-md-10">
                        <div class="radio">
                        <label class="col-form-label">
                        <input type="radio" name="visible" checked  value="1"> Visible
                        </label>
                        </div>
                        <div class="radio">
                        <label class="col-form-label">
                        <input type="radio" name="visible" value="0"> Not Visible
                        </label>
                        </div>
                        </div>
                        @else

                        <label class="col-form-label col-md-2">Visible</label>
                        <div class="col-md-10">
                        <div class="radio">
                        <label class="col-form-label">
                        <input type="radio" name="visible"  value="1"> Visible
                        </label>
                        </div>
                        <div class="radio">
                        <label class="col-form-label">
                        <input type="radio" name="visible" checked value="0"> Not Visible
                        </label>
                        </div>
                        </div>
                        @endif

                        </div>
                    <button class="btn btn-success float-end" type="submit">Update</button>

                </form>
            </div>
        </div>
    </div>

@endsection
