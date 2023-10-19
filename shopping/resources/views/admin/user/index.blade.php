@extends('layouts.admin')

@section('title','Users List')

@section('content')



<div class="row">
    <div class="col-md-12">
        
@if(session('message'))
<h1 class="alert alert-success"> {{session('message')}}</h1>
@endif

        <div class="card">
            <div class="card-header">
                <h3>
                    All Users
                      <a href="{{url('/admin/users/create')}}" class="btn btn-primary float-end">Add Users </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->role_as == '0')
                                <label class="btn btn-primary">User</label>
                                @elseif($user->role_as == '1')
                                <label class="btn btn-success">Admin</label>
                                @else
                                <label class="btn btn-danger">No Role Found</label>
                                @endif
                            </td>

                            <td>
                            <a href="{{url('/admin/users/'.$user->id.'/edit')}}"  class="btn btn-success">Edit</a>
                            <a href="{{url('/admin/users/'.$user->id.'/delete')}}" onclick="return confirm('Are You Sure You Want To Delete This?')" 
                            class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection