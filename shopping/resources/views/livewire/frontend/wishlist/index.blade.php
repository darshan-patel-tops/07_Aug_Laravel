<div>
    <section class="mt-8 mb-14">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="mb-8">
                <!-- heading -->
                <h1 class="mb-1">My Wishlist</h1>
                <p>There are 5 products in this wishlist.</p>
              </div>
              <div>
                <!-- table -->
                <div class="table-responsive">
                  <table class="table text-nowrap table-with-checkbox">
                    <thead class="table-light">
                      <tr>
                        <th>
                          <!-- form check -->
                          <div class="form-check">
                            <!-- input --><input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <!-- label --><label class="form-check-label" for="checkAll">
    
                            </label>
                          </div>
                        </th>
                        <th></th>
                        <th>Product</th>
                        <th>Amount</th>
                        {{-- <th>Status</th> --}}
                        <th>Actions</th>
                        <th>Remove</th>
                      </tr>
                    </thead>
                    <tbody>

                        @forelse ($wishlists as $wishlist)
                        @if($wishlist->product)
                        <tr>
    
                            <td class="align-middle">
                              <!-- form check -->
                              <div class="form-check">
                                <!-- input --><input class="form-check-input" type="checkbox" value="" id="chechboxTwo">
                                <!-- label --><label class="form-check-label" for="chechboxTwo">
        
                                </label>
                              </div>
        
                            </td>
                            <td class="align-middle">
                              <a href="{{url('/category/'.$wishlist->product->category->slug.'/'.$wishlist->product->id)}}"><img src="{{$wishlist->product->productimage[0]->image}}"
                                  class="icon-shape icon-xxl" alt="{{$wishlist->product->name}}"></a>
        
                            </td>
                            <td class="align-middle">
                              <div>
                                <h5 class="fs-6 mb-0"><a href="{{url('/category/'.$wishlist->product->category->slug.'/'.$wishlist->product->id)}}" class="text-inherit">{{$wishlist->product->name}}</a></h5>
                                {{-- <small>{{$wishlist->product->selling_price}}</small> --}}
                              </div>
                            </td>
                            <td class="align-middle">${{$wishlist->product->selling_price}} </td>
                            
                            {{-- <td class="align-middle"><span class="badge bg-success">In Stock</span></td> --}}
                            
                            <td class="align-middle">
                              <div class="btn btn-primary btn-sm">Add to Cart</div>
                            </td>
                            
                            <td class="align-middle ">
                                <button type="button" wire:click="removewishlist({{$wishlist->id}})"  data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Remove">
                                <span wire:loading.remove wire:target="removewishlist({{$wishlist->id}})">
                                    <i class="feather-icon icon-trash-2"></i>
                                </span>
                                <span wire:loading wire:target="removewishlist({{$wishlist->id}})">
                                    <i class="feather-icon icon-trash-2">Removing....</i>
                                </span>
                            </button>
                            </td>
                         
                        </tr>
                          @endif
                        @empty
                            <h2>Add Items To Wish List......</h2>
                        @endforelse
                   

                      
                      
    
                    </tbody>
                  </table>
                </div>
    
              </div>
            </div>
    
          </div>
    
    
    
        </div>
    
      </section>
    </div>
