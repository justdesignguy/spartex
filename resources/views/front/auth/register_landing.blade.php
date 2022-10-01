@extends('front.layout.master')
@section('content')
    <section class="signup-form ptb-120">
        <div class="wrapper">
            <div class="signup-form-wrap">
                <h2 class="common-title signup-main-title">For fashion professionals</h2>
                <div class="signup-boxes">
                    <div class="signup-box">
                        <div class="signup-box-wrap">
                            <h3 class="signup-title">BUSINESS  <span>MEMBERSHIP</span></h3>
                            <h4 class="signup-subtitle">Annual Fee (500$) - waived off for first 100 customers </h4>
                            <p>The amount will be credited in your account. 25 days money back guarantee. Amount showed is waived off for first 100 customer</p>
                            <ul>
                                <li>Recommended for Bulk Order</li>
                                <li>Low MOQ</li>
                                <li>Free swatch samples.</li>
                                <li>Personal Textile Expert to provide you assistance regarding the apparel you want to source. </li>
                            </ul>
                            <a class="signup-btn" href="{{ route('user.register_form', ['plan' => 'business']) }}">Get Access</a>
                        </div>
                    </div>
                    <div class="signup-box recommended-box">
                        <div class="signup-box-wrap">
                            <p class="recommended">Recommended</p>
                            <h3 class="signup-title">Standard <span>MEMBERSHIP</span> </h3>
                            <h4 class="signup-subtitle">No Annual Fee</h4>
                            <p>Fashion business information required, Application review within. 1- 2 business days. </p>
                            <ul>
                                <li> Recommended for Small Order</li>
                                <li>High MOQ </li>
                                <li>Free Swatch Samples For Particular Period</li>
                                <li> Email Support & Phone call Support at full time</li>
                            </ul>
                            <a class="signup-btn" href="{{ route('user.register_form', ['plan' => 'standard']) }}">Get Access</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
