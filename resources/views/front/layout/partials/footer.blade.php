<footer class="site-footer">
    <div class="wrapper">
        <div class="site-footer-wrap">
            <div class="office">
                <h2 class="footer-title">Office</h2>
                <p>243, Avadh Arena VIP Road, Surat - 395007 India</p>
                <a href="mailto:support@spartexglobal.com">support@spartexglobal.com</a>
                <a class="phone" href="tel:+91 98983 43908">+91 98983 43908</a>
                <a class="phone" href="tel:+91 90160 41153">+91 90160 41153</a>
            </div>
            <div class="links">
                <h2 class="footer-title">Links</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about_page') }}">About Us</a></li>
                    <li><a href="{{ route('explore') }}">Product</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="social-media">
                <h2 class="footer-title">Socials Media</h2>
                <ul class="social-media-list">
                    <li>
                        <a href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="subscribe-form">
                <h2 class="footer-title">Newsletter</h2>
                <form action="{{ route('newsletter.store') }}" method="POST">
                    @csrf
                    <div class="master-form">
                        <div class="form-field">
                            <input type="text" name="name" placeholder="Your Name" autocomplete="off" required>
                        </div>
                        <div class="form-field">
                            <input type="email" name="email" placeholder="Your Email" autocomplete="off" required>
                        </div>
                        <div class="form-field">
                            <button class="common-btn submit-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="wrapper">
        <div class="copyright-wrap">
            <p>Spartex © <?php echo date("Y"); ?>. All Rights Reserved.</p>
        </div>
    </div>
</div>
