<div class="slim-navbar">
    <div class="container">
        <ul class="nav">
            <li class="nav-item @if(Request::is('admin/dashboard')) active @endif">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="icon ion-ios-home-outline"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item with-sub @if(Request::is('admin/users') || Request::is('admin/user/*') || Request::is('admin/contact-requests') || Request::is('admin/contact-request/*') || Request::is('admin/newsletters')) active @endif">
                <a class="nav-link" href="javascript:;">
                    <i class="icon ion-ios-person-outline"></i>
                    <span>Users</span>
                </a>
                <div class="sub-item">
                    <ul>
                        <li><a href="{{ route('admin.users') }}">Users</a></li>
                        <li><a href="{{ route('admin.contact_requests') }}">Contact Requests</a></li>
                        <li><a href="{{ route('admin.newsletters') }}">Newsletters</a></li>
                    </ul>
                </div>
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
            <li class="nav-item @if(Request::is('admin/email-templates') || Request::is('admin/email-template/*')) active @endif">
                <a class="nav-link" href="{{ route('admin.email_templates') }}">
                    <i class="icon ion-settings"></i>
                    <span>Email Templates</span>
                </a>
            </li>
        </ul>
    </div>
</div>
