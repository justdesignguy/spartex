<header class="site-header @if(in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['user.register', 'user.register_steps'])) dark-header @endif">
    <div class="wrapper">
        <div class="site-header-wrap">
            <div class="site-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ url('front/images/site-logo.png') }}">
                </a>
            </div>
            <div class="site-menu">
                <ul class="menu">
                    <li class="menu-list">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="menu-list">
                        <a href="{{ route('about_page') }}">About us</a>
                    </li>
                    <li class="menu-list">
                        <a href="{{ route('explore') }}">Product</a>
                    </li>
                    <li class="menu-list">
                        <a href="javascript:;">Blog</a>
                    </li>
                </ul>
                <a class="toggle" href="#toggle-btn">
                    <div class="toggle-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
            <div class="site-btn">
                <a class="common-btn" href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </div>
</header>
