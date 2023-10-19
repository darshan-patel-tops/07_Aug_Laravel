<div>
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-12">
              <!-- card -->
              <div class="card py-1 border-0 mb-8">
                <div>
                  <h1 class="fw-bold">Shop Cart</h1>
                  <p class="mb-0">Shopping in 382480</p>
                </div>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-8 col-md-7">
    
              <div class="py-3">
                <!-- alert -->
                <div class="alert alert-danger p-2" role="alert">
                  You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
                </div>
                <ul class="list-group list-group-flush">
                 
                  @forelse ($carts as $cart)
                  @if($cart->product)
                  <li class="list-group-item py-3 py-lg-0 px-0">
                    <!-- row -->
                    <div class="row align-items-center">
                      @if ($cart->product->productimage)
                      
                      <div class="col-3 col-md-2">
                        <!-- img --> <img src="/{{$cart->product->productimage[0]->image}}" alt="Ecommerce"
                          class="img-fluid">
                        </div>
                        @else
                        <div class="col-3 col-md-2">
                          <!-- img --> <img src="/" alt="Ecommerce"
                            class="img-fluid">
                          </div>
                          
                      @endif
                      <div class="col-4 col-md-5">
                        <!-- title -->
                        <a href="{{url('/category/'.$cart->product->category->slug.'/'.$cart->product->id)}}" class="text-inherit"><h6 class="mb-0">{{$cart->product->name}}</h6></a>
                        <span><small class="text-muted">{{$cart->product->brand}}</small></span>
                        <!-- text -->
                            <div class="mt-2 small lh-1">
                              <span type="button" wire:click="removeitem({{$cart->id}})" 
                                wire:loading.attr="disabled" class="text-decoration-none text-inherit">
                                 <span
                              class="me-1 align-text-bottom">
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trash-2 text-success">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                              </svg> --}}
                            </span>
                            <button class="btn btn-primary" wire:loading.remove wire:target="removeitem({{$cart->id}})" >
                              Remove
                            </button>
                            <span class="text-muted" wire:loading wire:target="removeitem({{$cart->id}})"  >Removing....</span>
                          </span>
                            </div>
                      </div>
                      <!-- input group -->
                      <div class="col-3 col-md-3 col-lg-2">
                           <!-- input -->
                      <div class="input-group input-spinner  ">
                        <input type="button" wire:loading.attr="disabled" wire:click="decrease({{$cart->id}})" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                        <input type="number" step="1" value="{{$cart->quantity}}" name="quantity" class="quantity-field form-control-sm form-input   ">
                        @php
                            $totalquantity += $cart->quantity
                        @endphp
                        <input type="button" wire:loading.attr="disabled" wire:click="increase({{$cart->id}})" value="+" class="button-plus btn btn-sm " data-field="quantity">
                      </div>
    
                      </div>
                      <!-- price -->
                      <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold">${{$cart->product->selling_price * $cart->quantity}}</span>
                        @php
                            $totalprice += $cart->product->selling_price * $cart->quantity
                        @endphp
                        <div class="text-decoration-line-through text-muted small">${{$cart->product->original_price * $cart->quantity}}</div>
                      </div>
                    </div>
    
                  </li>
                  @endif
                  @empty
                  <div class="alert alert-primary p-2" role="alert">
                    You’ve No Items In Your Cart <a href="{{url('/category')}}" class="alert-link">SHOP NOW!</a>
                  </div>
                  @endforelse
                  
                 
    
                </ul>
                <!-- btn -->
                <div class="d-flex justify-content-between mt-4">
                  <a href="{{url('/category')}}" class="btn btn-primary">Continue Shopping</a>
                  {{-- <a href="#!" class="btn btn-dark">Update Cart</a> --}}
                </div>
    
              </div>
            </div>
    
            <!-- sidebar -->
            <div class="col-12 col-lg-4 col-md-5">
              <!-- card -->
              <div class="mb-5 card mt-6">
                <div class="card-body p-6">
                  <!-- heading -->
                  <h2 class="h5 mb-4">Summary</h2>
                  <div class="card mb-2">
                    <!-- list group -->
                    <ul class="list-group list-group-flush">
                      <!-- list group item -->
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="me-auto">
                          <div>Item Subtotal</div>
    
                        </div>
                        <span>${{$totalprice}}</span>
                      </li>

                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="me-auto">
                          <div>Total Item</div>
    
                        </div>
                        <span>{{$totalquantity}}</span>
                      </li>
    
                      <!-- list group item -->
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="me-auto">
                          <div>Service Fee</div>
    
                        </div>
                        <span>$0.00</span>
                      </li>
                      <!-- list group item -->
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="me-auto">
                          <div class="fw-bold">Subtotal</div>
    
                        </div>
                        <span class="fw-bold">${{$totalprice}}</span>
                      </li>
                    </ul>
    
                  </div>
                  <div class="d-grid mb-1 mt-4">
                    <!-- btn -->
                    {{-- <a href="{{url('/category')}}" class="btn btn-primary">Continue Shopping</a> --}}

                    {{-- <button > --}}
                     <a href="{{url('/checkout')}}" class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="button">
                       Go to Checkout <span class="fw-bold">${{$totalprice}}</span></a>
                      {{-- </button> --}}
                  </div>
                  <!-- text -->
                  <p><small>By placing your order, you agree to be bound by the Freshcart <a href="#!">Terms of Service</a>
                      and <a href="#!">Privacy Policy.</a> </small></p>
    
                  <!-- heading -->
                  <div class="mt-8">
                    <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                    <form>
                      <div class="mb-2">
                        <!-- input -->
                        <label for="giftcard" class="form-label sr-only">Email address</label>
                        <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card">
    
                      </div>
                      <!-- btn -->
                      <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                      <p class="text-muted mb-0"> <small>Terms & Conditions apply</small></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
