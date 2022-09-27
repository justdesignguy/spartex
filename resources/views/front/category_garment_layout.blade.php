@extends('front.layout.master')
@section('content')
    <section class="inner-banner">
        <img class="inner-banner-img" src="/front/images/inner-banner.jpg">
        <div class="inner-banner-content">
            <div class="wrapper">
                <div class="inner-banner-content-wrap">
                    <h1 class="banner-title">YOUR DESIGNS. YOUR FIT. YOUR BRAND</h1>
                    <p>And, we bring our knowledge and experience to offer <strong>private clothing labels</strong>,
                        both large and small, the ability to create products for niche markets with their own sense of
                        style.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="garments ptb-120">
        <div class="wrapper">
            <div class="garments-wrap">
                <div class="garments-list">
                    @foreach($products as $product)
                        <div class="garments-box">
                            <div class="garments-box-wrap">
                                <div class="garments-img">
                                    <img src="{{ getFileUrl($product->image, 'product') }}" alt="{{ $product->title }}">
                                </div>
                                <div class="garments-content">
                                    <h2 class="garments-title">{{ $product->title }}</h2>
                                    <p>{{ $product->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

