@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    Add Category
                      <a href="{{url('/admin/category')}}" class="btn btn-primary float-end">Back </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/category/create')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control">
                        @error('slug')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-1 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" />
                        
                    </div>

                    <div class="col-md-12 mt-3 mb-3">
                        <h3>SEO Tags</h3>
                    </div>

                    <div class="mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                        @error('meta_title')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" class="form-control">
                        @error('meta_keyword')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea type="text" name="meta_description" class="form-control" rows="3"></textarea>
                        @error('meta_description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection