@extends('layouts.front')
@section('title', 'Home')
{{--  @section('opTag')

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
@endsection  --}}
@section('content')

    {{--  @include('common.frontmodalalert')  --}}
    <header id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators justify-content-start ps-5 mb-5" style="margin-left: 3%;">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-overlay"></div>
                <img src="{{ asset('assets/front/assets/image/banner-1.webp') }}" class="d-block w-100 hero-img"
                    alt="Red Spices">

                <div class="carousel-caption">
                    <p class="hero-sub-text text-red" style="border-color: var(--primary-red)">Est. 1985</p>
                    <h1 class="hero-big-text">Fiery <span class="serif-font fst-italic text-red">Passion</span></h1>
                    <p class="hero-desc">Experience the authentic heat of hand-picked Kashmiri Chilies. Sun-dried to
                        perfection.</p>
                    <a href="#" class="btn-red-glow">Explore Collection</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-img-overlay"></div>
                <img src="{{ asset('assets/front/assets/image/banner-2.webp') }}" class="d-block w-100 hero-img"
                    alt="Turmeric">

                <div class="carousel-caption">
                    <p class="hero-sub-text text-gold" style="border-color: var(--accent-gold)">Pure Gold</p>
                    <h1 class="hero-big-text">Golden <span class="serif-font fst-italic text-gold">Roots</span></h1>
                    <p class="hero-desc">Healing turmeric with high curcumin content for your health.</p>
                    <a href="#" class="btn-red-glow" style="background: var(--accent-gold); color: black;">View
                        Turmeric</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-img-overlay"></div>
                <img src="{{ asset('assets/front/assets/image/banner-3.webp') }}" class="d-block w-100 hero-img"
                    alt="Spices">

                <div class="carousel-caption">
                    <p class="hero-sub-text text-white" style="border-color: white">The Blend</p>
                    <h1 class="hero-big-text">Secret <span class="serif-font fst-italic text-red">Alchemy</span></h1>
                    <p class="hero-desc">Ancient recipes passed down through generations.</p>
                    <a href="#" class="btn-red-glow">Discover Blends</a>
                </div>
            </div>
        </div>
    </header>

    <section class="container py-3 my-3">
        <div class="text-center mb-5 reveal">
            <h5 class="text-red text-uppercase letter-spacing-2">The Quality</h5>
            <h2 class="display-4 serif-font">Why Our Spices Are Special</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="special-card text-center">
                    <i class="fas fa-sun special-icon"></i>
                    <h4>Sun Dried</h4>
                    <p class=" small mt-3">We don't use machines to dry. Our spices soak up the natural sun for 7 days,
                        locking in the authentic aroma.</p>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="special-card text-center">
                    <i class="fas fa-mortar-pestle special-icon"></i>
                    <h4>Cold Ground</h4>
                    <p class=" small mt-3">Our 'Cold Grinding' technology ensures the spices don't get hot during
                        processing, preserving volatile oils.</p>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="special-card text-center">
                    <i class="fas fa-seedling special-icon"></i>
                    <h4>Single Origin</h4>
                    <p class=" small mt-3">We source directly from specific farms in Guntur and Kerala. No mixing, just
                        pure single-origin flavor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- product section -->
    <section class="product-section">
        <div class="container">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-5 reveal">
                <div class="mb-4 mb-md-0">
                    <h5 class="text-red text-uppercase letter-spacing-2">Shop Online</h5>
                    <h2 class="display-4 serif-font">Our Signature Collection</h2>
                </div>

                <ul class="nav nav-pills custom-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                            type="button" role="tab">All</button>
                    </li>
                    @foreach ($Category as $cat)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-{{ $cat->slugname }}-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-{{ $cat->slugname }}" type="button" role="tab">
                                {{ $cat->categoryname }}
                            </button>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
                    <div class="row g-4">

                        @foreach ($AllProducts as $allpro)
                            <div class="col-md-6 col-lg-3 reveal">
                                <div class="prod-card">
                                    <div class="prod-img-wrap">
                                        <span class="badge-new">Best Seller</span>
                                        <a href="product-detail.html">
                                            <img src="{{ asset('assets/front/assets/image/chilli-powder.webp') }}"
                                                class="prod-img" alt="Kashmiri Chilli">
                                        </a>
                                        <div class="prod-icons-bar">
                                            <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                            <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                                    class="fas fa-eye"></i></a>

                                        </div>
                                    </div>
                                    <div class="prod-details">
                                        <span class="prod-cat">{{ $allpro->productname ?? '' }}</span>
                                        <a href="product-detail.html" class="prod-title">
                                            {{ $allpro->productname ?? '' }}</a>
                                        <div class="prod-price">₹{{ $allpro->rate ?? '' }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                @foreach ($Category as $cat)
                    <div class="tab-pane fade" id="pills-{{ $cat->slugname }}" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3 reveal">
                                <div class="prod-card">
                                    <div class="prod-img-wrap">
                                        <span class="badge-new">Best Seller</span>
                                        <img src="{{ asset('assets/front/assets/image/chilli-powder.webp') }}"
                                            class="prod-img" alt="Kashmiri Chilli">
                                        <div class="prod-icons-bar">
                                            <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                            <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                                    class="fas fa-eye"></i></a>

                                        </div>
                                    </div>
                                    <div class="prod-details">
                                        <span class="prod-cat">Powder</span>
                                        <a href="#" class="prod-title"> Chilli Powder</a>
                                        <div class="prod-price">₹600.00</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 reveal">
                                <div class="prod-card">
                                    <div class="prod-img-wrap">
                                        <img src="{{ asset('assets/front/assets/image/corriander-powder.webp') }}"
                                            class="prod-img" alt="Lakadong Turmeric">
                                        <div class="prod-icons-bar">
                                            <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                            <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                                    class="fas fa-eye"></i></a>

                                        </div>
                                    </div>
                                    <div class="prod-details">
                                        <span class="prod-cat"> Powder</span>
                                        <a href="#" class="prod-title">Coriander Powder</a>
                                        <div class="prod-price">₹350.00</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 reveal">
                                <div class="prod-card">
                                    <div class="prod-img-wrap">
                                        <span class="badge-new"
                                            style="background: var(--accent-gold); color: black;">New</span>
                                        <img src="{{ asset('assets/front/assets/image/turmuric-powder.webp') }}"
                                            class="prod-img" alt="Garam Masala">

                                        <div class="prod-icons-bar">
                                            <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                            <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                                    class="fas fa-eye"></i></a>

                                        </div>
                                    </div>
                                    <div class="prod-details">
                                        <span class="prod-cat">Powder</span>
                                        <a href="#" class="prod-title">Turmeric Powder</a>
                                        <div class="prod-price">₹450.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="text-center mt-5 reveal">
                <a href="#" class="btn-red-glow">View All Products</a>
            </div>
        </div>
    </section>

    <section class="broken-grid-section bg-secondary-dark">
        <div class="vertical-line d-none d-md-block"></div>
        <div class="container">
            <div class="row align-items-center mb-5 reveal">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="image-box-wrapper">
                        <img src="{{ asset('assets/front/assets/image/broken-grid-1.webp') }}" class="image-box"
                            alt="Dried Red Chilies">
                    </div>
                </div>
                <div class="col-md-5 offset-md-0">
                    <div class="content-box">
                        <h3 class="text-red">Ethical Sourcing</h3>
                        <p class=" mt-3">We believe in fair trade. By cutting out middlemen, we ensure our farmers get
                            paid 20% above market rates while you get the freshest produce.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5 reveal">
                <div class="col-md-5 offset-md-1 order-2 order-md-1">
                    <div class="content-box content-box-right">
                        <h3 class="text-red">No Preservatives</h3>
                        <p class=" mt-3">Check our labels. You will never find E-numbers, anti-caking agents, or
                            artificial colors. Our deep red color comes from nature, not a lab.</p>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="image-box-wrapper">
                        <img src="{{ asset('assets/front/assets/image/broken-grid-2.webp') }}" class="image-box"
                            alt="Pure Spices on Spoons">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- recepi section -->
    <section class="timeline-section">
        <div class="container">

            <div class="text-center mb-3 pb-3">
                <h5 class="text-red text-uppercase letter-spacing-2">The Collection</h5>
                <h2 class="text-white display-4" style="font-family: serif;">Culinary Recipes</h2>
            </div>

            <div class="timeline">

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="video-card left-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/yoW4kHHH4lQ?si=PTr81042O9IRGtvS"
                                        title="Tandoori" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="text-content ps-lg-5 mb-4 mb-lg-0">
                                <h3 class="text-white display-6">01. The Heat</h3>
                                <h5 class="text-red mb-3">Tandoori Masterclass</h5>
                                <p class="text-white">A fiery introduction to Kashmiri spices. Watch how the clay oven
                                    technique creates the perfect char.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2">
                            <div class="video-card right-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/DNOce-85bvo?si=p7vvRDnQmbZDCmkt"
                                        title="Curry" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 text-lg-end">
                            <div class="text-content pe-lg-5 mb-4 mb-lg-0">
                                <h3 class="text-white display-6">02. The Base</h3>
                                <h5 class="text-red mb-3">Authentic Gravy</h5>
                                <p class="text-white">The secret foundation of Indian cuisine. One sauce to rule them
                                    all.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="video-card left-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/4U0kT213xJI?si=9cw0Xv5_X2vAxSdq"
                                        title="Golden Milk" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="text-content ps-lg-5 mb-4 mb-lg-0">
                                <h3 class="text-white display-6">03. The Healing</h3>
                                <h5 class="text-red mb-3">Golden Milk</h5>
                                <p class="text-white">An ancient wellness ritual. Saffron, turmeric, and warmth in a
                                    cup.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2">
                            <div class="video-card right-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/ynyB_10II_U?si=sEIYbCfX6ePeiIsR"
                                        title="Noodles" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 text-lg-end">
                            <div class="text-content pe-lg-5 mb-4 mb-lg-0">
                                <h3 class="text-white display-6">04. The Fusion</h3>
                                <h5 class="text-red mb-3">Garlic Noodles</h5>
                                <p class="text-white">East meets West in this butter-garlic explosion. Quick, easy, and
                                    addictive.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <section class="testimonial-section  my-5">
        <div class="container  reveal">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h5 class="text-red text-uppercase letter-spacing-2">Reviews</h5>
                    <h2 class="display-5 serif-font">The Taste of Truth</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="testi-card">
                                    <div class="watermark-quote">”</div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="star-rating mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="testi-text serif-font fst-italic">
                                                "I used to buy spices from the supermarket, but the difference is night
                                                and day. The Chilli Powder from RedSpice has a depth of flavor I've
                                                never experienced. It’s not just hot; it’s aromatic and smoky."
                                            </p>

                                            <div class="client-info">
                                                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                                    class="client-img" alt="Sarah">
                                                <div>
                                                    <h5 class="mb-0 text-white serif-font">Sarah Jenkins</h5>
                                                    <small class="text-muted">Home Cook • Verified Buyer</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testi-card">
                                    <div class="watermark-quote">”</div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="star-rating mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="testi-text serif-font fst-italic">
                                                "As a chef, consistency is everything. The Turmeric I get from here is
                                                always potent and pure gold in color. No flour fillers, just pure root.
                                                Highly recommended for professional kitchens."
                                            </p>

                                            <div class="client-info">
                                                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                                    class="client-img" alt="David">
                                                <div>
                                                    <h5 class="mb-0 text-white serif-font">David Ross</h5>
                                                    <small class="text-muted">Head Chef, The Table</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="custom-nav-btns">
                            <button class="nav-btn" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="prev">
                                <i class="fas fa-arrow-left"></i>
                            </button>
                            <button class="nav-btn" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="next">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="container py-3 my-3">
        <div class="d-flex flex-column text-center justify-content-between align-items-center mb-5 reveal">
            <div>
                <h5 class="text-red text-uppercase letter-spacing-2">From The Blog</h5>
                <h2 class="display-5 serif-font">Field to Flavor</h2>
            </div>
            <!-- <a href="#" class="btn btn-outline-light rounded-0 px-4 mt-3 mt-md-0">View All Posts</a> -->
        </div>

        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="card blog-card">
                    <div class="blog-img-container">
                        <div class="blog-date">12 OCT</div>
                        <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?q=80&w=1000&auto=format&fit=crop"
                            class="blog-img" alt="Rogan Josh">
                    </div>
                    <div class="card-body px-0">
                        <h4 class="text-red card-title mt-3 serif-font h5">The Secret to the Perfect Rogan Josh</h4>
                        <p class="text-white small">Understanding the role of Rattanjot and Kashmiri Chilli in achieving
                            that signature red color without artificial dyes.</p>
                        <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal">
                <div class="card blog-card">
                    <div class="blog-img-container">
                        <div class="blog-date">05 NOV</div>
                        <img src="https://images.unsplash.com/photo-1564419320461-6870880221ad?q=80&w=1000&auto=format&fit=crop"
                            class="blog-img" alt="Glass Jars">
                    </div>
                    <div class="card-body px-0">
                        <h4 class="text-red card-title mt-3 serif-font h5">Why Glass Jars Matter</h4>
                        <p class="text-white small">Plastic leaches chemicals over time. Learn why we only use
                            UV-protected glass jars to preserve the potency of our premium range.</p>
                        <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal">
                <div class="card blog-card">
                    <div class="blog-img-container">
                        <div class="blog-date">20 NOV</div>
                        <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=1000&auto=format&fit=crop"
                            class="blog-img" alt="Guntur Trip">
                    </div>
                    <div class="card-body px-0">
                        <h4 class="text-red card-title mt-3 serif-font h5">A Trip to Guntur</h4>
                        <p class="text-white small">Join us as we visit the famous chilli yards of Andhra Pradesh during
                            harvest season to select the finest crops.</p>
                        <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cta section -->
    <!--<section class="container mb-5 reveal">
                                                                                                <div class="position-relative p-4 p-lg-5 text-center"
                                                                                                    style="background: linear-gradient(135deg, #1a0505 0%, #000 100%); border: 1px solid rgba(211, 47, 47, 0.2);">

                                                                                                    <div
                                                                                                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 200px; height: 200px; background: var(--primary-red); filter: blur(100px); opacity: 0.2; pointer-events: none;">
                                                                                                    </div>

                                                                                                    <div class="position-relative z-1">
                                                                                                        <h2 class="serif-font mb-3">Join the <span class="text-red">Spice Club</span></h2>

                                                                                                        <p class="mb-4 " style="max-width: 500px; margin: 0 auto;">
                                                                                                            Unlock secret recipes, early access to new harvests, and get <span class="text-red">10%
                                                                                                                OFF</span> your first order.
                                                                                                        </p>

                                                                                                        <div class="row justify-content-center">
                                                                                                            <div class="col-12 col-md-8 col-lg-6">
                                                                                                                <div class="input-group">
                                                                                                                    <input type="email" class="form-control bg-dark border-secondary text-white py-3"
                                                                                                                        placeholder="Enter your email address" style="border-radius: 0;">
                                                                                                                    <button class="btn bg-red rounded-0 px-3 px-md-4 fw-bold" type="button">SUBSCRIBE</button>
                                                                                                                </div>
                                                                                                                <p class=" mt-3" style="font-size: 0.7rem;">We respect your inbox. No spam, ever.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section> -->



@endsection

@section('scripts')


@endsection
