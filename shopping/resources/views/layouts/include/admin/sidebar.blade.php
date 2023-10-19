<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
   
  </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Thunder</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="/admin/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Orders</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Orders</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="{{url('/admin/orders')}}" class="menu-link">
                        <div data-i18n="Without menu">All Orders</div>
                    </a>
                </li>

                {{-- <li class="menu-item">
                    <a href="/admin/orders/create" class="menu-link">
                        <div data-i18n="Without menu">Create Orders</div>
                    </a>
                </li> --}}
                
            </ul>
        </li>
       
        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Users</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="{{url('/admin/users')}}" class="menu-link">
                        <div data-i18n="Without menu">All Users</div>
                    </a>
                </li>

                {{-- <li class="menu-item">
                    <a href="/admin/Users/create" class="menu-link">
                        <div data-i18n="Without menu">Create Users</div>
                    </a>
                </li> --}}
                
            </ul>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Category</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Category</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="/admin/category" class="menu-link">
                        <div data-i18n="Without menu">All Category</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/admin/category/create" class="menu-link">
                        <div data-i18n="Without menu">Create Category</div>
                    </a>
                </li>
                
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Brands</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Brands</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="/admin/brand" class="menu-link">
                        <div data-i18n="Without menu">All Brands</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/admin/brand/create" class="menu-link">
                        <div data-i18n="Without menu">Create Brand</div>
                    </a>
                </li>
                
            </ul>
        </li>
        
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Products</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Products</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="/admin/product" class="menu-link">
                        <div data-i18n="Without menu">All Products</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/admin/product/create" class="menu-link">
                        <div data-i18n="Without menu">Create Product</div>
                    </a>
                </li>
                
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Colors</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Colors</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="/admin/colors" class="menu-link">
                        <div data-i18n="Without menu">All Colors</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/admin/colors/create" class="menu-link">
                        <div data-i18n="Without menu">Create Colors</div>
                    </a>
                </li>
                
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Sliders</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Sliders</div>
            </a>

            <ul class="menu-sub">
                
                <li class="menu-item">
                    <a href="{{url('/admin/sliders')}}" class="menu-link">
                        <div data-i18n="Without menu">All Sliders</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/admin/sliders/create" class="menu-link">
                        <div data-i18n="Without menu">Create Sliders</div>
                    </a>
                </li>
                
            </ul>
        </li>

    </ul>
</aside>