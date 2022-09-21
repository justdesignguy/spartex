@extends('front.layout.master')
@section('content')
    <section class="banner-section">
        <img class="banner-image" src="/front/images/banner-img.jpg">
        <div class="banner-content">
            <div class="wrapper">
                <div class="banner-content-wrap" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="section-title" >Providing design guidance, production and distribution </h1>
                    <h2 class="sub-title"> - all customized for each client </h2>
                    <a class="common-btn" href="#">About Us</a>
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
    <section class="process">
        <div class="wrapper">
            <div class="process-title-wrap text-center ptb-130">
                <h2 class="default-title" data-aos="fade-up" data-aos-duration="1000">Our Process</h2>
                <p data-aos="fade-up" data-aos-duration="1500">Spartex is the leading supplier of anything and everything fabric - from sustainable material to fashion fabric - for brands, fashion and sewing enthusiasts who love being individual. </p>
            </div>
        </div>
        <div class="pro-wrap">
            <div class="process-menu">
                <ul>
                    <li>
                        <a href="#step-1" class="active">Explore</a>
                    </li>
                    <li>
                        <a href="#step-2" class="">PLAN </a>
                    </li>
                    <li>
                        <a href="#step-3" class="">SOURCE </a>
                    </li>
                    <li>
                        <a href="#step-4" class="">SAMPLES</a>
                    </li>
                    <li>
                        <a href="#step-5" class="">ORDER</a>
                    </li>
                    <li>
                        <a href="#step-6" class="">SHIP</a>
                    </li>
                </ul>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div id="step-1" class="explore ptb-130">
                        <div class="wrapper">
                            <div class="explore-wrap">
                                <div class="explore-img" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="/front/images/explore.jpg">
                                </div>
                                <div class="explore-content" data-aos="fade-up" data-aos-duration="1000">
                                    <h2 class="default-title">Explore our extensive portfolio of fabrics</h2>
                                    <p>Which will ensure your project doesn't compromise on style or quality. From fabrics which can be digitally printed, and dyed to other surface ornamentation techniques to add on the fabric according to your ideas or concept.</p>
                                </div>
                                <div class="large-latter">EXPLORE</div>
                            </div>
                        </div>
                    </div>
                    <?php /*<div id="step-2" class="video ptb-130">
                        <div class="wrapper">
                            <div class="video-wrap">
                                <div class="video-content" data-aos="fade-up" data-aos-duration="1000">
                                    <p>Plan your next collection, find fabrics that suit it the best and stay organised in one place.</p>
                                    <h3 class="default-title">Purchasing Fabric Made Fun &amp; Easy.</h3>
                                    <ul>
                                        <li>We at Spartex offer a customised experience to our customers and help them identify and organise the fabric.
                                        </li><li> Consumers provide us with the fabric detail they want by uploading photos of dresses, items, or anything which inspires them.</li>
                                        <li> They can also decide the range of fabric they are looking for. </li>
                                        <li>We are committed to helping you find suitable fabric with the help of our textile experts. </li>
                                    </ul>
                                </div>
                                <div class="video-source" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="/front/images/cloths.jpg">
                                    <a href="https://www.youtube.com/watch?v=D0UnqGm_miA"></a>
                                </div>
                                <div class="large-latter">plan</div>
                            </div>
                        </div>
                    </div> */ ?>
                    <div id="step-2" class="new-plan ptb-130">
                        <div class="wrapper">
                            <div class="new-plan">
                                <div class="new-plan-title text-center">
                                    <h2 class="default-title">Plan </h2>
                                    <p>We will offer advice and guidance on trends and movements in the industry, so you’re always one step ahead. We will also provide everything that is required to turn your dream design into reality!</p>
                                </div>
                                <div class="new-plan-list">
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">1</p>
                                            <p>Hit SIGN UP instead of contact us page and submit an enquiry with us describing initial requirement details.</p>
                                        </div>
                                    </div>
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">2</p>
                                            <p>We will get in touch with you through email or phone to explore the possibilities of working together.</p>
                                        </div>
                                    </div>
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">3</p>
                                            <p>We ask for a few details about your requirement and after checking the feasibility, we share the costing (quotation) with you along with the terms of business.</p>
                                        </div>
                                    </div>
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">4</p>
                                            <p>If our costing is found doable at your end, we start sampling your given design(s).</p>
                                        </div>
                                    </div>
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">5</p>
                                            <p>We ship the sample(s) to you for physical examination and approval.</p>
                                        </div>
                                    </div>
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">6</p>
                                            <p>Once a sample is approved, we begin the production as per mutually agreed terms.</p>
                                        </div>
                                    </div>
                                    <div class="new-plan-box">
                                        <div class="new-plan-box-wrap">
                                            <p class="step-no">7</p>
                                            <p>We keep you posted with size sets, TOPs, and SMS and take approvals on every step. We let you know once production is done.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-3" class="source ptb-130 remove-top-padding">
                        <div class="wrapper">
                            <div class="source-wrap">
                                <div class="source-content" data-aos="fade-up" data-aos-duration="1000">
                                    <p>Now source the best quality of fabric at the best price with a detailed description of the material at your fingertip.</p>
                                    <p>Be it sustainable eco-friendly fabric or synthetic, we have a good network of trusted suppliers and mills on panels.</p>
                                    <p>All you need is to specify your preferred colour code (Pantone). Rest we're well equipped to dye your desired fabric in your desired color. </p>
                                </div>
                                <div class="source-image" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="/front/images/mix-cloths.jpg">
                                </div>
                            </div>
                            <div class="source-wrap">
                                <div class="source-image" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="/front/images/mix-cloths.jpg">
                                    <div class="large-latter">Source</div>
                                </div>
                                <div class="source-content" data-aos="fade-up" data-aos-duration="1000">
                                    <p>Spartex has a team of experts and before proceeding with dying, we may recommend color and fabric result probability in advance.</p>
                                    <p>Be it hand block printing or screen or digital - Spartex does all kinds of fabric printing. All you need to provide your print design. For other than digital printing, a minimum will be applied depending upon your design details and the fabric you choose.</p>                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="step-4" class="samples ptb-130">
                        <div class="wrapper">
                            <div class="samples-wrap">
                                <div class="samples-left" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="/front/images/sample-1.jpg">
                                    <h2 class="default-title">Spartex is all set to impress you!</h2>
                                </div>
                                <div class="samples-right" data-aos="fade-up" data-aos-duration="1000">
                                    <h2 class="default-title">Be it computer embroidery or hand embroidery. We carry super-speciality to provide you with all kinds of embroidery as per your design requirements.</h2>
                                    <img src="/front/images/sample-2.jpg">
                                </div>
                            </div>
                            <div class="large-latter">samples</div>
                        </div>
                    </div>
                    <div id="step-5" class="order ptb-130">
                        <div class="wrapper">
                            <h2 class="default-title text-center" data-aos="fade-up" data-aos-duration="1000">ORDER PROCESSING</h2>
                            <div class="order-wrap">
                                <div class="order-box" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="order-box-wrap">
                                        <div class="order-img">
                                            <img src="/front/images/order-1.jpg">
                                        </div>
                                        <div class="order-content">
                                            <h3 class="order-title"> Low MOQ </h3>
                                            <p>With low minimums, we make on-demand production possible. Prevent overstocked fabric and avoid unsold clothing, making your business more sustainable.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-box" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="order-box-wrap">
                                        <div class="order-img">
                                            <img src="/front/images/order-1.jpg">
                                        </div>
                                        <div class="order-content">
                                            <h3 class="order-title">Easy to Reorder</h3>
                                            <p>If an item goes out of stock, it can be immediately reproduced if the MOQ is met. We will also help you find replacements when needed – just ask your dedicated order manager!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-box" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="order-box-wrap">
                                        <div class="order-img">
                                            <img src="/front/images/order-1.jpg">
                                        </div>
                                        <div class="order-content">
                                            <h3 class="order-title">Quick Lead Times</h3>
                                            <p>We get it: Every order is urgent. Our lead time in fulfilling most orders is 1-2 weeks, and we are committed to ensuring your order is delivered on time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-6" class="ship ptb-130">
                        <div class="wrapper">
                            <h2 class="default-title text-center" data-aos="fade-up" data-aos-duration="1000">SHIP </h2>
                            <div class="ship-wrap">
                                <div class="ship-step" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="ship-box">
                                        <div class="ship-circle">
                                            <p>Quality <span>Control</span> </p>
                                        </div>
                                        <p>Spartex works on the "Quality First" policy. Our quality team remains active right from the time of sourcing of fabric till the final packing of finished garments.</p>
                                    </div>
                                </div>
                                <div class="ship-step" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="ship-box">
                                        <div class="ship-circle">
                                            <p>Delivered <span>to your door </span> </p>
                                        </div>
                                        <p>At every critical stage, Spartex ensures that the quality is under control and as per the approval we have by you.</p>
                                    </div>
                                </div>
                                <div class="ship-step" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="ship-box">
                                        <div class="ship-circle">
                                            <p>Easy <span>Importing </span> </p>
                                        </div>
                                        <p>Last but not least, we pack each of your garments in a clear bag (preferably biodegradable) and all go inside a carton.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="focus-formula ptb-130">
        <div class="wrapper">
            <div class="focus-formula-wrap">
                <div class="formula" data-aos="fade-up" data-aos-duration="1000">
                    <div class="formula-wrap">
                        <img src="/front/images/formula.jpg">
                        <h2 class="focus-title">Accurate & Fast service is our magical formula.</h2>
                    </div>
                </div>
                <div class="focus" data-aos="fade-up" data-aos-duration="1000">
                    <div class="focus-wrap">
                        <img src="/front/images/focus.jpg">
                        <h2 class="focus-title">Green future sustainable fabric is our prime area of focus</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection