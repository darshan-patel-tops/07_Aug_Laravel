@extends('layouts.app2')



@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Inputs</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/add-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" id="name" placeholder="Enter Name of Category" required class="form-control">
                        </div>
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Description</label>
                        <div class="col-md-10">
                            <textarea name="description" id="description" class="form-control" cols="30" rows="3"></textarea>
                            {{-- <input type="text"  placeholder="Enter Description of Category" required > --}}
                        </div>
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image" id="image" accept="image/*" placeholder="Enter Name of Category" required class="form-control">
                        </div>
                    </div>
                    <div class="input-block mb-3 row">
                        <label class="col-form-label col-md-2">Visible</label>
                        <div class="col-md-10">
                        <div class="radio">
                        <label class="col-form-label">
                        <input type="radio" name="visible" value="1"> Visible
                        </label>
                        </div>
                        <div class="radio">
                        <label class="col-form-label">
                        <input type="radio" name="visible" value="0"> Not Visible
                        </label>
                        </div>
                        </div>
                        </div>
                    <button class="btn btn-primary float-end" type="submit">Button</button>

                </form>
            </div>
        </div>
    </div>

@endsection
