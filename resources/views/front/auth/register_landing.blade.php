@extends('front.layout.master')
@section('content')
    <section class="signup-form">
        <div class="wrapper">
            <div class="signup-form-wrap">
                <h2 class="common-title signup-main-title">For fashion professionals</h2>
                <div class="signup-boxes">
                    <div class="signup-box">
                        <div class="signup-box-wrap">
                            <h3 class="signup-title">FASHION <span>Business</span> MEMBERSHIP</h3>
                            <h4 class="signup-subtitle">No Annual Fee</h4>
                            <p>Fashion business information required Application reviewed within 1-2 business days </p>
                            <ul>
                                <li>Access to all 200,000+ wholesale fabrics</li>
                                <li>3 yard minimum</li>
                                <li>Free swatch samples</li>
                                <li>Dedicated fabric sourcing manager</li>
                            </ul>
                            <a class="signup-btn" href="{{ route('user.register_form') }}">Get Access</a>
                        </div>
                    </div>
                    <div class="signup-box recommended-box">
                        <div class="signup-box-wrap">
                            <p class="recommended">Recommended</p>
                            <h3 class="signup-title">FASHION <span>Standard</span> MEMBERSHIP</h3>
                            <h4 class="signup-subtitle">No Annual Fee</h4>
                            <p>Fashion business information required Application reviewed within 1-2 business days <span>30-day money back guarantee</span> </p>
                            <ul>
                                <li>Access to all 200,000+ wholesale fabrics</li>
                                <li>3 yard minimum</li>
                                <li>Free swatch samples</li>
                                <li>Dedicated fabric sourcing manager</li>
                            </ul>
                            <a class="signup-btn" href="{{ route('user.register_form') }}">Get Access</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
