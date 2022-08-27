@extends('front.layout.master')
@section('content')
    @php
        $meta['meta_title'] = "Spartex Explore";
    @endphp
    <section class="inner-banner">
        <img class="inner-banner-img" src="/front/images/inner-banner.jpg">
        <div class="inner-banner-content">
            <div class="wrapper">
                <div class="inner-banner-content-wrap">
                    <h1 class="banner-title">Fabric For Fashion Brands</h1>
                    <p>All in one solutions for Luxury , Comfort & Sustainablility </p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-service ptb-120">
        <div class="wrapper">
            <div class="our-service-wrap">
                <div class="services-content">
                    <h3 class="small-heading">How Our <br>Fabrics Make a Difference</h3>
                    <p>Spartex is the leading supplier of anything and everything fabric - from sustainable material to
                        fashion fabric - for brands, fashion and sewing enthusiasts.</p>
                </div>
                <div class="services-list">

                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Sustainable <br> Production
                        </div>
                        </p>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Silky <br> Smoothness</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-box-wrap">
                            <img src="/front/images/icon-1.png" alt="" class="entered lazyloaded">
                            <p>Botanic <br> Origin</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @if(count($categories) > 0)
        <section class="products ptb-120">
            <div class="wrapper">
                <div class="products-wrap">
                    @foreach($categories as $category)
                        <div class="products-box">
                            <div class="products-box-wrap">
                                <div class="products-image">
                                    <img src="{{ getFileUrl($category->image, 'category') }}">
                                </div>
                                <div class="products-content">
                                    <h2 class="products-title">{{ $category->title }}</h2>
                                    <a class="common-btn blue-btn"
                                       href="{{ route('category_detail', $category->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
