@extends('layouts.admin')


@section('content')

@if(session('message'))
<h1 class="alert alert-success"> {{session('message')}}</h1>
@endif

<div class="col-lg-8 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }}🎉</h5>
                    <p class="mb-4">
                        You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.
                    </p>

                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="{{asset('admin/assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="col-md-3">
        <div class="card card-body bg-primary text-white mb-3">
            <label >Total Orders</label>
            <h1>4</h1>
            <a href="{{url('/admin/orders')}}" class="text-white">View</a>

        </div>
    </div>
</div> --}}
<hr>
<h1>Orders</h1>
<div class="col-lg-12 col-md-4 order-1">
    <div class="row">

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Orders</span>
                    <h3 class="card-title mb-2">{{$totalorders}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +720.80%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Today's Orders</span>
                    <h3 class="card-title mb-2">{{$todayorders}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">This Month's Orders</span>
                    <h3 class="card-title mb-2">{{$thismonthorder}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +200.80%</small>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">This Year's Orders</span>
                    <h3 class="card-title mb-2">{{$thisyearorder}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
        

     
        
    </div>
</div>
<hr>
<h1>Brands And Products</h1>
<div class="col-lg-12 col-md-4 order-1">
    <div class="row">

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Products</span>
                    <h3 class="card-title mb-2">{{$totalproducts}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +720.80%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Category</span>
                    <h3 class="card-title mb-2">{{$totalcategories}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +52.80%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Brands</span>
                    <h3 class="card-title mb-2">{{$totalbrands}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +200.80%</small>
                </div>
            </div>
        </div>
        
      
        
    </div>
</div>

<hr>
<h1>Total Users And Admins</h1>
<div class="col-lg-12 col-md-4 order-1">
    <div class="row">

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Users</span>
                    <h3 class="card-title mb-2">{{$totalusers}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +720.80%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Visitors</span>
                    <h3 class="card-title mb-2">{{$totalguests}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +52.80%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Admins</span>
                    <h3 class="card-title mb-2">{{$totaladmins}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +200.80%</small>
                </div>
            </div>
        </div>
        
      
        
    </div>
</div>
@endsection


