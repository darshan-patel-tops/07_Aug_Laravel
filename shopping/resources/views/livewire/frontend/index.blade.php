<div>
    {{-- Stop trying to control. --}}<section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-6">
                        <h3 class="mb-0">Daily Best Sells</h3>
                    </div>
                </div>
                <div class="table-responsive-xl pb-6">
                    <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
                        <div class="col">
                            <div class=" pt-8 px-6 px-xl-8 rounded" style="background:url(assets/images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
                                <div>
                                    <h3 class="fw-bold text-white">100% Organic Coffee Beans.
                                    </h3>
                                    <p class="text-white">Get the best deal before close.</p>
                                    <a href="#!" class="btn btn-primary">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        @foreach ($trendings as $trending)
                            
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center  position-relative ">
                                        <a href="pages/shop-single.html"><img src="{{$trending->productimage[0]->image}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>

                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                      class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                            <a wire:click="addtowishlist({{$trending->id}})" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>{{$trending->brand}}</small></a></div>
                                    <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">{{$trending->name}}</a></h2>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">${{$trending->selling_price}}</span> 
                                            <span class="text-decoration-line-through text-muted">${{$trending->original_price}}</span>
                                        </div>
                                        <div>
                                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                                            <span><small>4.5</small></span>
                                        </div>
                                    </div>
                                    <div class="d-grid mt-2" >
                                        <a wire:click="addtocart({{$trending->id}})" class="btn btn-primary ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach



                    </div>
                </div>
            </div>
        </section>
</div>
