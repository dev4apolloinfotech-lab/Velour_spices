<!-- footer -->
<footer class="bg-black text-white pb-4">
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-lg-3 mb-4">
                <!-- <h2 class="serif-font text-red mb-3">REDSPICE.</h2> -->
                <div class="">
                    <img src="{{ asset('assets/front/assets/image/velour-logo.jpg') }}" height="100" alt="">
                </div>
                <p class="small" style="line-height: 1.8;">
                    Premium spices sourced ethically from the finest farms in India.
                    We bring the authentic taste of tradition to the modern kitchen.
                </p>
                <div class="mt-4 social-media">
                    <a href="#" class=" me-3 transition-hover"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class=" me-3 transition-hover"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class=" transition-hover"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>

            <div class="col-lg-2 mb-4">
                <h6 class="text-uppercase mb-4 text-white" style="letter-spacing: 2px;">Quick Link</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2 footer-link-wrap">
                        <a href="{{ route('front.index') }}" class="footer-link-animated">Home</a>
                    </li>
                    <li class="mb-2 footer-link-wrap">
                        <a href="{{ route('front.about') }}" class="footer-link-animated">About Us</a>
                    </li>
                    <li class="mb-2 footer-link-wrap">
                        <a href="{{ route('front.blog') }}" class="footer-link-animated">Blog</a>
                    </li>
                    <li class="mb-2 footer-link-wrap">
                        <a href="{{ route('front.contact_us') }}" class="footer-link-animated">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 mb-4">
                <h6 class="text-uppercase mb-4 text-white" style="letter-spacing: 2px;">Certifications</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2 d-flex align-items-center" style="color: #a0a0a0;">
                        <i class="fas fa-award text-red me-2" style="font-size: 1.5rem;"></i>
                        <span style="font-size: 1rem;">FSSAI Approved</span>
                    </li>
                </ul>
            </div>


            <div class="col-lg-3 mb-4">
                <h6 class="text-uppercase mb-4 text-white" style="letter-spacing: 2px;">Get in Touch</h6>
                <ul class="list-unstyled small  social-media">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt text-red me-3 mt-1"></i>
                        <span>918 - Gala Empire,
                            Opposite Doordarshan Tower,
                            Drive - in Road , Thaltej,
                            Ahmedabad - 380051.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-envelope text-red me-3"></i>
                        <a href="mailto:sales@velourspices.com"
                            class="text-decoration-none  hover-red">sales@velourspices.com</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fa-solid fa-phone text-red me-3"></i>
                        <a href="tel:+916356933345" class="text-decoration-none  hover-red">+91 63569 33345</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-top border-secondary pt-4 mt-4 text-center small text-muted">
            <div class="row">
                <div class="col-md-6 text-white text-md-start">
                    &copy; 2025 RedSpice Inc. All rights reserved.
                </div>
                <div class="col-md-6 text-md-end mt-2 mt-md-0 social-media">
                    <a href="privacy-policy.html" class="text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-decoration-none me-3">Terms & Conditions</a>
                    <a href="#" class="text-decoration-none me-3">Refund Policy</a>
                    <a href="#" class="text-decoration-none">Cancellation Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@yield('body')
