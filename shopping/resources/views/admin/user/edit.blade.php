@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        
@if(session('message'))
<h1 class="alert alert-success"> {{session('message')}}</h1>
@endif
@if($errors->any())
<ul class="alert alert-warning">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
        <div class="card">
            <div class="card-header">
                <h3>
                    Edit Users
                      <a href="{{url('/admin/users')}}" class="btn btn-primary float-end">Back </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/users'.$users->id)}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$users->name}}" class="form-control">
                    </div>
                   
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$users->email}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="role">Select Role</label>
                        <select name="role_as" class="form-control" id="role_as">
                            <option value="">Select role</option>
                            <option value="0" {{$users->role_as == '0' ? 'selected' : ''}} >User</option>
                            <option value="1" {{$users->role_as == '1' ? 'selected' : ''}} >Admin</option>
                        </select>
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