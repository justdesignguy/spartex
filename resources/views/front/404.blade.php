@extends('front.layout.master')
@section('content')
<section class="inner-banner">
    <img class="inner-banner-img" src="/front/images/inner-banner.jpg">
    <div class="inner-banner-content">
        <div class="wrapper">
            <div class="inner-banner-content-wrap">
                <h1 class="banner-title">Page Not Found!</h1>
            </div>
        </div>
    </div>
</section>

<section class="error-page ptb-120">
    <div class="wrapper">
        <div class="error-content text-center">
            <h1 class="common-title"><span>404</span></h1>
            <!-- <h2 class="error-title">Page Not Found!</h2> -->
            <div class="error-disc">
                <p>Sorry! We could not find the specific page you requested.</p>
                <p>Please check the address and try again.</p>
                <p>If you still cannot find the page you are looking for, try going to the top level "<a href="/">Spartex</a>" and clicking on a link from the menu.</p>
            </div>
        </div>
    </div>
</section>

@endsection

