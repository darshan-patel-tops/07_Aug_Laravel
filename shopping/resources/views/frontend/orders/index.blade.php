@extends('layouts.frontend.app')

@section('title','Orders Page')
    

@section('content')


{{-- <livewire:frontend.checkout.index /> --}}

<section>
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center d-md-none py-4">
            <!-- heading -->
            <h3 class="fs-5 mb-0">Account Setting</h3>
            <!-- button -->
            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button"
              data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
              <i class="bi bi-text-indent-left fs-3"></i>
            </button>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
          <div class="pt-10 pe-lg-10">
            <!-- nav -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="account-orders.html"><i
                    class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link" href="account-settings.html"><i
                    class="feather-icon icon-settings me-2"></i>Settings</a>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link" href="account-address.html"><i
                    class="feather-icon icon-map-pin me-2"></i>Address</a>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link" href="account-payment-method.html"><i
                    class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link" href="account-notification.html"><i
                    class="feather-icon icon-bell me-2"></i>Notification</a>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <hr>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link " href="../index.html"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
          <div class="py-6 p-md-6 p-lg-10">
            <!-- heading -->
            <h2 class="mb-6">Your Orders</h2>

            <div class="table-responsive-xxl border-0">
              <!-- Table -->
              <table class="table mb-0 text-nowrap table-centered ">
                <!-- Table Head -->
                <thead class="bg-light">
                  <tr>
                    {{-- <th>&nbsp;</th> --}}
                    {{-- <th>Order ID</th> --}}
                    {{-- <th>View</th> --}}
                    <th>Tracking No.</th>
                    {{-- <th>Username</th> --}}
                    <th>Status</th>
                    <th>Ordered Date</th>
                    <th>Payment Mode</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body -->
                  @forelse ($orders as $order)
                  <tr>
                        
                      
                    {{-- <td class="align-middle border-top-0 w-0">
                      <a href="#"> <img src="/{{$order->product->productimage->image}}" alt="Ecommerce"
                          class="icon-shape icon-xl"></a>

                    </td> --}}
                    {{-- <td class="align-middle border-top-0">
                        
                        <a href="#" class="fw-semi-bold text-inherit">
                            <h6 class="mb-0">{{$order->id}}</h6>
                        </a>
                        <span><small class="text-muted">400g</small></span>
                        
                    </td> --}}
                    {{-- <td class="text-muted align-middle border-top-0">
                      <a href="{{url('/orders/'.$order->id)}}" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                    </td> --}}
                    <td class="align-middle border-top-0">
                      <a href="{{url('/orders/'.$order->id)}}" class="text-inherit">#{{$order->tracking_no}}</a>

                    </td>
                    <td class="align-middle border-top-0">
                        <span class="badge bg-warning">{{$order->status_message}}</span>
                      </td>
                    {{-- <td class="align-middle border-top-0">
                        {{$order->fullname}}
                    </td> --}}
                    <td class="align-middle border-top-0">
                        {{$order->created_at->format('d-m-Y')}}
                        
                    </td>
                    <td class="align-middle border-top-0">
                      {{$order->payment_mode}}

                    </td>
                    
                    {{-- <td class="align-middle border-top-0">
                      $15.00
                    </td> --}}
                  </tr>
                  @empty
                        <tr>
                            <td colspan="4"> No Orders Found</td>
                        </tr>
                        <button href="/category"type="button" class="btn btn-primary">Order Now</button>
                  @endforelse
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection