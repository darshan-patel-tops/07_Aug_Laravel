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
                    All Colors
                      <a href="{{url('/admin/colors/create')}}" class="btn btn-primary float-end">Add Colors </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Color Name</th>
                            <th>Color Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colors as $color)
                            
                        <tr>
                            <td>{{$color->id}}</td>
                            <td>{{$color->name}}</td>
                            <td>{{$color->code}}</td>
                            <td>{{$color->status == '1' ? 'Hidden':'Visible'}}</td>
                            {{-- <td><img src="/uploads/color/{{$color->image}}" alt="color Image" height="40px" width="40px"></td> --}}
                            <td>
                            <a href="{{url('/admin/colors/'.$color->id.'/edit')}}"  class="btn btn-success">Edit</a>
                            <a href="{{url('/admin/colors/'.$color->id.'/delete')}}" onclick="return confirm('Are You Sure You Want To Delete This?')" 
                            class="btn btn-danger">Delete</a>
                                {{-- {{$product->name}} --}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection