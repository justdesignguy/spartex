@extends('front.layout.master')
@section('content')
    @php
        $meta['meta_title'] = "Spartex Contact";
    @endphp
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
    <section class="contact-us ptb-120">
        <div class="wrapper">
            <div class="contact-us-wrap">
                <div class="contact-page-form">
                    <h2 class="small-heading white text-center">Get in touch with us</h2>
                    <div class="contact-form">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="contact-field">
                                <input type="text" name="first_name" placeholder="First Name" autocomplete="off"
                                       required>
                            </div>
                            <div class="contact-field">
                                <input type="text" name="last_name" placeholder="Last Name" autocomplete="off" required>
                            </div>
                            <div class="contact-field">
                                <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                            </div>
                            <div class="contact-field">
                                <input type="text" name="mobile_number" placeholder="Phone" autocomplete="off" required>
                            </div>
                            <div class="contact-field">
                                <input type="text" name="country" placeholder="Country" autocomplete="off" required>
                            </div>
                            <div class="contact-field">
                                <input type="text" name="how_did_you_hear_about_as"
                                       placeholder="How did you hear about us?" autocomplete="off" required>
                            </div>
                            <div class="contact-field col-full">
                                <textarea name="message" placeholder="Your Message" autocomplete="off"
                                          required></textarea>
                            </div>
                            <div class="contact-field submit">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-details">
                    <div class="contact-box">
                        <div class="contact-box-wrap">
                            <div class="location-icon">
                                <img src="/front/images/location.png">
                            </div>
                            <p>243, Avadh Arena VIP Road, Surat - 395007 India </p>
                        </div>
                    </div>
                    <div class="contact-box google-map">
                        <div class="contact-box-wrap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14691.59470790579!2d71.4655563!3d22.9907531!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1661542928471!5m2!1sen!2sin"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="contact-box-wrap">
                            <div class="mail">
                                <div class="location-icon">
                                    <img src="/front/images/mail-icon.png">
                                </div>
                                <a href="mailto:support@spartexglobal.com">support@spartexglobal.com</a>
                            </div>
                            <div class="whatsapp">
                                <div class="location-icon">
                                    <img src="/front/images/whatsapp.png">
                                </div>
                                <a href="tel:+91 98983 43908">+91 98983 43908</a><br />
                                <a href="tel:+91 90160 41153">+91 90160 41153</a>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
