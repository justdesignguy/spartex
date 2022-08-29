@extends('front.layout.master')
@section('content')
    @php
        $meta['meta_title'] = "Fabrics";
    @endphp
    <section class="inner-banner">
        <img class="inner-banner-img" src="{{ url('front/images/inner-banner.jpg') }}">
        <div class="inner-banner-content">
            <div class="wrapper">
                <div class="inner-banner-content-wrap">
                    <h1 class="banner-title">Viscose is the fundamental <br>elements of our work.</h1>
                    <p>Through in-depth research and experimentation, we use this natural sources to <br> produce
                        fabrics of the future. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="range-fabrics ptb-120">
        <div class="wrapper">
            <div class="range-fabrics-title-sec">
                <h2 class="small-heading">Range of fabrics</h2>
                <p>This wide range can meet the needs of any designer, whether a small <br> startup or a multi-outlet
                    brand. </p>
            </div>
            <div class="range-fabrics-wrap">
                @foreach($rangeOfProducts as $product)
                    <div class="range-fabrics-box">
                        <div class="range-fabrics-box-wrap">
                            <div class="range-fabrics-image">
                                <img src="{{ getFileUrl($product->image, 'product') }}">
                            </div>
                            <div class="range-fabric-content">
                                <h3 class="range-fabrics-title">{{ $product->title }}</h3>
                                <p>{{ $product->short_description }}</p>
                                <a class="common-btn blue-btn" href="javascript:;">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="types-fabrics">
        <div class="wrapper">
            <h2 class="small-heading text-center">Types Of fabrics</h2>
            <div class="types-fabrics-wrap">
                @foreach($typeOfProducts as $product)
                    <div class="types-fabrics-box">
                        <div class="types-fabrics-box-wrap">
                            <div class="fabrics-img">
                                <div class="fabrics-large-img">
                                    <img src="{{ getFileUrl($product->image, 'product') }}">
                                </div>
                                @if(isset($product->small_image))
                                    <div class="fabrics-small-img">
                                        <img src="{{ getFileUrl($product->small_image, 'product') }}">
                                    </div>
                                @endif
                            </div>
                            <h2 class="types-fabrics-title">{{ $product->title }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
