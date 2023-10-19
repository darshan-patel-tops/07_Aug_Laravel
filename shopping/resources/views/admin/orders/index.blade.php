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
                    All Orders
                      {{-- <a href="{{url('/admin/orders/create')}}" class="btn btn-primary float-end">Add Orders </a> --}}
                    </h3>

                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <label >Filter By Date</label>
                                <input type="date" name="date" value={{Request::get('date') ?? date('Y-m-d')}} class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label >Filter By status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="">Select All Status</option>
                                    <option value="in progress" {{Request::get('status') == 'in progress' ?'selected':''}} >In Progress</option>
                                    <option value="completed" {{Request::get('status') == 'completed' ? 'selected':''}} >Completed</option>
                                    <option value="pending" {{Request::get('status') == 'pending' ?'selected':''}} >Pending</option>
                                    <option value="cancelled" {{Request::get('status') == 'cancelled' ?'selected':''}} >Cancelled</option>
                                    <option value="out-for-delivery" {{Request::get('status') == 'out-for-delivery'? 'selected':''}} >Out For Delivery</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tracking No.</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Ordered Date</th>
                            <th>Payment Mode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)

                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->tracking_no}}</td>
                            <td>{{$order->fullname}}</td>
                            <td>{{$order->status_message}}</td>
                            <td>{{$order->created_at->format('y-m-D')}}</td>
                            <td>{{$order->payment_mode}}</td>
                            {{-- <td><img src="/uploads/color/{{$color->image}}" alt="color Image" height="40px" width="40px"></td> --}}
                            <td>
                            <a href="{{url('/admin/orders/'.$order->id.'/view')}}"  class="btn btn-primary">View</a>
                            {{-- <a href="{{url('/admin/orders/'.$order->id.'/delete')}}" onclick="return confirm('Are You Sure You Want To Delete This?')"
                            class="btn btn-danger">Delete</a> --}}
                                {{-- {{$product->name}} --}}
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Orders Available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{-- {{$order->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
