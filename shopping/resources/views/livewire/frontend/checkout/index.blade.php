<div>
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- col -->
            <div class="col-12">
              <div>
                <div class="mb-8">
                  <!-- text -->
                  <h1 class="fw-bold mb-0">Checkout</h1>
                  {{-- <p class="mb-0">Already have an account? Click here to <a href="#!">Sign in</a>.</p> --}}
                </div>
              </div>
            </div>
                                       {{-- @if($address->user) --}}
@if($this->totalamount == 0)
<div class="col-12">
    <div>
      <div class="mb-8">
        <!-- text -->
        <a href="/category">

            <h1 class="fw-bold mb-0">No Products to Checkout.....</h1>
            <button class="btn btn-primary"type="button"> Continue Shopping</button>
        </a>
        {{-- <p class="mb-0">Already have an account? Click here to <a href="#!">Sign in</a>.</p> --}}
      </div>
    </div>
  </div>
@endif
          </div>
          <div>
            <!-- row -->
            <form wire:submit.prevent="confirmorder">
            <div class="row">




              <div class="col-lg-7 col-md-12">
                <!-- accordion -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <!-- accordion item -->
                  <div class="accordion-item py-4">
    
                    <div class="d-flex justify-content-between align-items-center">
                      <!-- heading one -->
                      <a href="#" class="fs-5 text-inherit collapsed h4"  data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        <i class="feather-icon icon-map-pin me-2 text-muted"></i>Add delivery address
                      </a>
                      <!-- btn -->
                      <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#addAddressModal">Add a new address </a>
                      <!-- collapse -->
                    </div>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                      data-bs-parent="#accordionFlushExample">
                      <div class="mt-5">
                        <div class="row">


                            @forelse ($useraddress as $address)
                                    @if($address->address)

                                    <div class="col-lg-6 col-12 mb-4">
                                        <!-- form -->
                                        <div class="card card-body p-6 ">
                                          {{-- <div class="form-check mb-4"> --}}
                                          {{-- <input type="radio" name="ultimateaddress"  wire.model.defer="ultimateaddress" value="dosomething">Do something --}}
                                            {{-- <label class="form-check-label text-dark" for="homeRadio">
                                              Home
                                            </label> --}}
                                            {{-- <div class="row mb-3"> --}}
                                              {{-- <label class="col-sm-3 col-form-label">Gender</label> --}}
                                              <div class="form-check mb-4">
                                                  <input type="radio" name="ultimateaddress" wire:model.defer="ultimateaddress" value="{{$address->id}}">
                                              </div>
                                          {{-- </div> --}}


                                          {{-- </div> --}}
                                          <!-- address -->
                                          <address> <strong>{{$address->fullname}}</strong> <br>
                
                                            {{$address->address}}<br>
                
                                            {{-- Nebraska, United States,<br> --}}
                
                                            <abbr title="Phone">P:{{$address->phone}}</abbr></address>
                                          <span class="text-danger">{{$address->email}}</span>
                
                                        </div>
                                      </div>

                                    @endif

                         
                          @empty
                                <h3>No Address Found</h3>
                          @endforelse


                        </div>
                      </div>
                    </div>
    
                  </div>
                 
                  <div class="accordion-item py-4">
    
                    <a href="#" class="text-inherit h5"  data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      <i class="feather-icon icon-credit-card me-2 text-muted"></i>Payment Method
                      <!-- collapse --> </a>
                    <div id="flush-collapseFour" class="accordion-collapse collapse "
                      data-bs-parent="#accordionFlushExample">
    
                      <div class="mt-5">
                        <div>
    
                          <div class="card card-bordered shadow-none mb-2">
                            <!-- card body -->
                            <div class="card-body p-6">
                              <div class="d-flex">
                                <div class="form-check">
                                  <!-- checkbox -->
                                  <div class="form-check mb-4">
                                    <input type="radio" name="payment_mode" wire:model.defer="payment_mode" value="paypal">
                                </div>

                                <label class="form-check-label ms-2" for="paypal">
    
                                  </label>
                                </div>
                                <div>
                                  <!-- title -->
                                  <h5 class="mb-1 h6"> Payment with Paypal</h5>
                                  <p class="mb-0 small">You will be redirected to PayPal website to complete your purchase
                                    securely.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-9 float-end">
                            <button type="button" wire:click="paypal" class="btn btn-primary col-md-9 mb-2 float-end">Pay With Paypal</button>
                        </div>
                          </div>

                          <!-- card -->
                          <div class="card card-bordered shadow-none mb-2">
                            <!-- card body -->
                            <div class="card-body p-6">
                              <div class="d-flex mb-4">
                                <div class="form-check ">
                                  <!-- input -->
                                  <div class="form-check mb-4">
                                    <input type="radio" name="payment_mode" wire:model.defer="payment_mode" value="card">
                                </div>
                
                                <label class="form-check-label ms-2" for="creditdebitcard">
    
                                  </label>
                                </div>
                                <div>
                                  <h5 class="mb-1 h6"> Credit / Debit Card</h5>
                                  <p class="mb-0 small">Safe money transfer using your bank accou k account. We support
                                    Mastercard tercard, Visa, Discover and Stripe.</p>
                                </div>
                              </div>
                              <div class="row g-2">
                                <div class="col-12">
                                  <!-- input -->
                                  <div class="mb-3">
                                    <label class="form-label">Card Number</label>
                                    <input type="text" class="form-control" placeholder="1234 4567 6789 4321">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <!-- input -->
                                  <div class="mb-3 mb-lg-0">
                                    <label class="form-label">Name on card </label>
                                    <input type="text" class="form-control" placeholder="Enter your first name">
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <!-- input -->
                                  <div class="mb-3  mb-lg-0 position-relative">
                                    <label class="form-label">Expiry date </label>
                                    <input class="form-control flatpickr " type="text" placeholder="Select Date">
                                    <div class="position-absolute bottom-0 end-0 p-3 lh-1">
                                      <i class="bi bi-calendar text-muted"></i>
                                    </div>
    
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <!-- input -->
                                  <div class="mb-3  mb-lg-0">
                                    <label class="form-label">CVV code </label>
                                    <input type="password" class="form-control" placeholder="***">
    
                                  </div>
                                </div>
                                <div class="col-md-9 float-end">
                                    <button type="button" wire:click="card" class="btn btn-primary col-md-9 mb-2 float-end">Pay</button>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                          <div class="card card-bordered shadow-none">
                            <div class="card-body p-6">
                              <!-- check input -->
                              <div class="d-flex">
                                <div class="form-check">
                                  <div class="form-check mb-4">
                                    <input type="radio" name="payment_mode" wire:model.defer="payment_mode" value="cod">
                                </div>
                    
                                <label class="form-check-label ms-2" for="cashonDelivery">
    
                                  </label>
                                </div>
                                <div>
                                  <!-- title -->
                                  <h5 class="mb-1 h6"> Cash on Delivery</h5>
                                  <p class="mb-0 small">Pay with cash when your order is delivered.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 float-end">
                            <button type="button"  class="btn btn-primary col-md-9 mb-2 float-end">Cash On Delivery</button>
                        </div>
                          </div>
                          <!-- Button -->
                          <div class="mt-5 d-flex justify-content-end">
                            {{-- <a href="#" class="btn btn-outline-gray-400 text-muted"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                              aria-controls="flush-collapseThree">Prev</a> --}}
                            <button type="submit" class="btn btn-primary ms-2">Place Order</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
    
                  </div>
    
                  
                  
                </div>
                
              </div>
    
              <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
                <div class="mt-4 mt-lg-0">
                  <div class="card shadow-sm">
                    <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                    <ul class="list-group list-group-flush">
                      
                        @forelse ($carts as $cart)
                            
                        <li class="list-group-item px-4 py-3">
                            <div class="row align-items-center">
                          <div class="col-2 col-md-2">
                            <img src="/{{$cart->product->productimage[0]->image}}" alt="Ecommerce" class="img-fluid"></div>
                          <div class="col-5 col-md-5">
                            <h6 class="mb-0">{{$cart->product->name}}</h6>
                            <span><small class="text-muted">{{$cart->product->brand}}</small></span>
                            
                          </div>
                          <div class="col-2 col-md-2 text-center text-muted">
                            <span>{{$cart->quantity}}</span>
    
                          </div>
                          <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                              <span class="fw-bold">${{$cart->product->selling_price}}</span>
                            <div class="text-decoration-line-through text-muted small">${{$cart->product->original_price}}</div>
                        </div>
                    </div>
                    
                </li>

                @empty
                    
                @endforelse
    
                      <!-- list group item -->
                      <li class="list-group-item px-4 py-3">
                        <div class="d-flex align-items-center justify-content-between   mb-2">
                          <div>
                            Item Subtotal
    
                          </div>
                          <div class="fw-bold">
                            ${{$totalamount}}
    
                          </div>
    
                        </div>
                        <div class="d-flex align-items-center justify-content-between  ">
                          <div>
                            Service Fee <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip"
                              title="Service Charge"></i>
    
                          </div>
                          <div class="fw-bold">
                            $0.00
    
                          </div>
    
                        </div>
    
                      </li>
                      <!-- list group item -->
                      <li class="list-group-item px-4 py-3">
                        <div class="d-flex align-items-center justify-content-between fw-bold">
                          <div>
                            Subtotal
                          </div>
                          <div>
                            ${{$totalamount}}
    
    
                          </div>
    
                        </div>
    
    
                      </li>
    
                    </ul>
    
                  </div>
    
    
                </div>
              </div>
    
    
            </div>
          </div>
    
    
        </div>
    
    
      </section>

      <div wire:ignore.self class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body p-6">
              <div class="d-flex justify-content-between mb-5">
                <!-- heading -->
                <div>
                  <h5 class="h6 mb-1" id="addAddressModalLabel">New Shipping Address</h5>
                  <p class="small mb-0">Add new shipping address for your order delivery.</p>
                </div>
                <div>
                  <!-- button -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              </div>
              <!-- row -->
              <form wire:submit.prevent="addaddress">

              <div class="row g-3">
                <!-- col -->
                <div class="col-12">
                  <input type="text" class="form-control" wire:model.defer="fullname" placeholder="Fullname" aria-label="First name" required="">
                    @error('fullname')
                    <small class="text-danger">{{$message}}</small>                        
                    @enderror
                </div>
                
                <div class="col-12">
                  <input type="email" class="form-control" wire:model.defer="email" placeholder="Email" aria-label="email" required="">
                  @error('email')
                  <small class="text-danger">{{$message}}</small>                        
                  @enderror
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" wire:model.defer="phone" placeholder="Phone" aria-label="phone" required="">
                  @error('phone')
                  <small class="text-danger">{{$message}}</small>                        
                  @enderror
                </div>
                <!-- col -->
                <div class="col-12">
    
                  <textarea type="text" class="form-control" wire:model.defer="address" placeholder="Address"></textarea>
                  @error('address')
                    <small class="text-danger">{{$message}}</small>                        
                    @enderror
                </div>
                <div class="col-12">
                    <!-- button -->
                    <input type="text" class="form-control" wire:model.defer="zipcode" placeholder="zipcode">
                    @error('zipcode')
                    <small class="text-danger">{{$message}}</small>                        
                    @enderror
                </div>
                {{-- <div class="col-12">
                  <!-- button -->
                  <input type="text" class="form-control" placeholder="City">
                </div> --}}
                {{-- <div class="col-12">
                  <!-- button -->
                  <select class="form-select">
                    <option selected=""> India</option>
                    <option value="1">UK</option>
                    <option value="2">USA</option>
                    <option value="3">UAE</option>
                  </select>
                </div> --}}
                {{-- <div class="col-12">
                  <!-- button -->
                  <select class="form-select">
                    <option selected="">Gujarat</option>
                    <option value="1">Northern Ireland</option>
                    <option value="2"> Alaska</option>
                    <option value="3">Abu Dhabi</option>
                  </select>
                </div> --}}
                
                {{-- <div class="col-12">
                  <!-- button -->
                  <input type="text" class="form-control" placeholder="Business Name">
                </div> --}}
                {{-- <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <!-- label -->
                    <label class="form-check-label" for="flexCheckDefault">
                      Set as Default
                    </label>
                  </div>
                </div> --}}
                <!-- button -->
                <div class="col-12 text-end">
                  <button type="button" wire:click="closemodal" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary"  type="submit">Save Address</button>
                </div>
              </div>
              </form>
            </div>
    
          </div>
        </div>
      </div>


    </div>

    
@push('script')
<script>
    window.addEventListener('close-modal',event=>
    {
        $('#addAddressModal').modal('hide');
    });
</script>
@endpush
