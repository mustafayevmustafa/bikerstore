<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.home')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

{{--        @can('viewAny', \App\Models\Product::class)--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">--}}
{{--                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>--}}
{{--            </a>--}}
{{--            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">--}}
{{--                <li>--}}
{{--                    <a href="{{route('products.index')}}">--}}
{{--                        <i class="bi bi-circle"></i><span>Product List</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{route('products.create')}}">--}}
{{--                        <i class="bi bi-circle"></i><span>Product Create</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--        </li>--}}
{{--        @endcan--}}

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('city.index')}}">
                <i class="bi bi-mask"></i>
                <span>City</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('about.index')}}">
                <i class="bi bi-card-text"></i>
                <span>About</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.user')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('service.index')}}">
                <i class="bi bi-menu-app-fill"></i>
                <span>Service</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('vehicle.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Vehicle</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('marka.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Marka</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('pattern.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Model</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('category.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('color.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Color</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('fuel.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Yanacaq Növü</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('reklam.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Reklam</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('ban.index')}}">
                <i class="bi bi-app-indicator"></i>
                <span>Ban</span>
            </a>
        </li>
{{--    <x-menu/>--}}



        </ul>

</aside><!-- End Sidebar-->
