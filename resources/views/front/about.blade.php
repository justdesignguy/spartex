@extends('front.layout.master')
@section('content')
<section class="inner-banner">
    <img class="inner-banner-img" src="/front/images/inner-banner.jpg">
    <div class="inner-banner-content">
        <div class="wrapper">
            <div class="inner-banner-content-wrap">
                <h1 class="banner-title">About us</h1>
            </div>
        </div>
    </div>
</section>
<section class="about-section ptb-130" style="background-image: url('/front/images/about-bg.jpg');">
    <div class="wrapper">
        <div class="about-wrap">
            <div class="about-content" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="default-title">We seamlessly connect tech with textiles to solve your sourcing needs.</h2>
                <p>Spartex is the leading supplier of anything and everything fabric - from sustainable material to fashion fabric - for brands, fashion and sewing enthusiasts who love being individual. We value all our customers and provide them with an experience of fabric sourcing like never before. </p>
                <ul class="logo-list">
                    <li>
                        <img src="/front/images/textile-logo.png">
                    </li>
                    <li>
                        <img src="/front/images/textile-logo.png">
                    </li>
                    <li>
                        <img src="/front/images/textile-logo.png">
                    </li>
                    <li>
                        <img src="/front/images/textile-logo.png">
                    </li>
                </ul>
            </div>
            <div class="about-img" data-aos="fade-up" data-aos-duration="1000">
                <img src="/front/images/about-img.jpg">
                <div class="quality-img">
                    <img src="/front/images/quality.png">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
