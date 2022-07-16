<div class="slim-navbar">
    <div class="container">
        <ul class="nav">
            <li class="nav-item @if(Request::is('admin/dashboard')) active @endif">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="icon ion-ios-home-outline"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item @if(Request::is('admin/users')) active @endif">
                <a class="nav-link" href="{{ route('admin.users') }}">
                    <i class="icon ion-ios-person-outline"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item @if(Request::is('admin/categories') || Request::is('admin/category/*')) active @endif">
                <a class="nav-link" href="{{ route('admin.categories') }}">
                    <i class="icon ion-ios-gear-outline"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="nav-item @if(Request::is('admin/products') || Request::is('admin/product/*')) active @endif">
                <a class="nav-link" href="{{ route('admin.products') }}">
                    <i class="icon ion-settings"></i>
                    <span>Products</span>
                </a>
            </li>
        </ul>
    </div>
</div>
