@extends('front.layout.master')
@section('content')
<section class="inner-banner">
    <img class="inner-banner-img" src="/front/images/inner-banner.jpg">
    <div class="inner-banner-content">
        <div class="wrapper">
            <div class="inner-banner-content-wrap">
                <h1 class="banner-title">Contact</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-us">
    <div class="wrapper">
        <div class="contact-us-wrap">
            <h2 class="small-heading white">Get in touch with us</h2>
            <div class="contact-form">
                <form>
                    <div class="contact-field">
                        <input type="text" name="First Name" placeholder="First Name">
                    </div>
                    <div class="contact-field">
                        <input type="text" name="First Name" placeholder="First Name">
                    </div>
                    <div class="contact-field">
                        <input type="text" name="First Name" placeholder="First Name">
                    </div>
                    <div class="contact-field">
                        <input type="text" name="First Name" placeholder="First Name">
                    </div>
                    <div class="contact-field">
                        <input type="text" name="First Name" placeholder="First Name">
                    </div>
                    <div class="contact-field">
                        <input type="text" name="First Name" placeholder="First Name">
                    </div>
                    <div class="contact-field">
                        <textarea name="message" placeholder="Your Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection