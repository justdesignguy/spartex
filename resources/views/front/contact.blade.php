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
            <div class="contact-page-fomr"> 
                <h2 class="small-heading white text-center">Get in touch with us</h2>
                <div class="contact-form">
                    <form>
                        <div class="contact-field">
                            <input type="text" name="First Name" placeholder="First Name">
                        </div>
                        <div class="contact-field">
                            <input type="text" name="Last Name" placeholder="Last Name">
                        </div>
                        <div class="contact-field">
                            <input type="text" name="Email" placeholder="Email">
                        </div>
                        <div class="contact-field">
                            <input type="text" name="Phone" placeholder="Phone">
                        </div>
                        <div class="contact-field">
                            <input type="text" name="Country" placeholder="Country">
                        </div>
                        <div class="contact-field">
                            <input type="text" name="How did you hear about us ?" placeholder="How did you hear about us ?">
                        </div>
                        <div class="contact-field col-full">
                            <textarea name="message" placeholder="Your Message"></textarea>
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
                        <p>Akshya Nagar 1st Block 1st <br>Cross, Rammurthy nagar,<br> Bangalore-560016</p>
                    </div>
                </div>
                <div class="contact-box google-map">
                    <div class="contact-box-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14691.59470790579!2d71.4655563!3d22.9907531!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1661542928471!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-box-wrap">
                        <div class="mail">
                            <div class="location-icon">
                                <img src="/front/images/mail-icon.png">
                            </div>
                            <a href="mailto:contact@spartex.com">contact@spartex.com</a>
                        </div>
                        <div class="whatsapp">
                            <div class="location-icon">
                                <img src="/front/images/whatsapp.png">
                            </div>
                            <a href="mailto:+1 800 123 45 67">+1 800 123 45 67</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection