@extends('layouts.front')
@section('title', 'Contact')
{{-- Meta tags --}}
@section('opTag')
    {{-- Meta tags --}}
    <meta name="description" content="{{ $meta->metaDescription ?? '' }}">
    <meta name="keywords" content="{{ $meta->metaKeyword ?? '' }}">
    <meta name="title" content="{{ $meta->metaTitle ?? '' }}">
@endsection


@section('head')
    {!! $meta->head ?? '' !!}
@endsection


@section('body')
    @if (!empty($meta->body))
        <script type="text/javascript">
            {!! $meta->body !!}
        </script>
    @endif
@endsection
@section('content')

    @include('common.contactalert')


    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section position-relative py-5">

        <div class="bg-decoration-circle"></div>

        <div class="container position-relative z-1">
            <div class="row g-0 contact-card-wrapper">

                <div class="col-lg-5">
                    <div class="contact-info-panel h-100 d-flex flex-column justify-content-between">

                        <div>
                            <h6 class="text-gold text-uppercase letter-spacing-2 mb-4">Get in Touch</h6>
                            <h2 class="serif-font text-white mb-4 display-5">Let's Talk Spice.</h2>
                            <p class="mb-5">
                                Whether you're looking for bulk orders, have a question about our sourcing,
                                or just want to share a recipe, we're here to listen.
                            </p>

                            <div class="info-item mb-4">
                                <i class="fas fa-map-marker-alt icon-gold"></i>
                                <div>
                                    <h6 class="text-white mb-1">Experience Center</h6>
                                    <p class=" small mb-0">918 - Gala Empire, Opposite Doordarshan Tower, Drive - in
                                        Road , Thaltej, Ahmedabad - 380051.</p>
                                </div>
                            </div>

                            <div class="info-item mb-4">
                                <i class="fas fa-envelope icon-gold"></i>
                                <div>
                                    <h6 class="text-white mb-1">Email Us</h6>
                                    <a href="mailto:sales@velourspices.com"
                                        class="text-white small text-decoration-none hover-white">sales@velourspices.com</a>
                                </div>
                            </div>

                            <div class="info-item mb-4">
                                <i class="fas fa-phone icon-gold"></i>
                                <div>
                                    <h6 class="text-white mb-1">Call Us</h6>
                                    <a href="tel:+916356933345" class="text-white text-decoration-none small mb-0">+91
                                        63569 33345</a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <span class="text-gold small me-3">Follow Us:</span>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-panel h-100">
                        <form action="{{ route('front.contact_us_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="floating-group">
                                        <input type="text" class="form-control classic-input" id="name"
                                            name="name" placeholder=" " required>
                                        <label for="name" class="floating-label">Your Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="floating-group">
                                        <input type="email" class="form-control classic-input" id="email"
                                            name="email" placeholder=" " required>
                                        <label for="email" class="floating-label">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="floating-group">
                                        <select class="form-select classic-input" id="subject" name="Topic">
                                            <option value="" selected disabled>Select a Topic</option>
                                            <option value="1">Bulk / Wholesale Inquiry</option>
                                            <option value="2">Order Support</option>
                                            <option value="3">General Inquiry</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="floating-group">
                                        <textarea class="form-control classic-input" id="message" name="message" rows="4" placeholder=" "></textarea>
                                        <label for="message" class="floating-label">Write your message here...</label>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">

                                    <div class="form-group mt-4 mb-4">
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                &#x21bb;
                                            </button>
                                        </div>
                                    </div>

                                    <div class="floating-group">
                                        <input id="captcha" type="text" class="form-control classic-input"
                                            name="captcha" placeholder=" " required>
                                        <label for="message" class="floating-label">Enter Captcha</label>
                                    </div>


                                    @if ($errors->has('captcha'))
                                        <span class="help-block">
                                            <strong class="">{{ $errors->first('captcha') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-12 mt-5 text-end">
                                    <button type="submit" class="btn btn-send">
                                        Send Message <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="map-frame-wrapper reveal">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.698779634749!2d72.52274231496708!3d23.04943888493952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84b8f0f5b5f1%3A0x5e2b0b0b0b0b0b0b!2sGala%20Empire!5e0!3m2!1sen!2sin!4v1625555555555!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'refresh_captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endsection
