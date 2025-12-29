@extends('layouts.front')

@section('title', 'Product Detail')

@section('content')

    @include('common.frontmodalalert')

    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Product detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">{{ $category_id }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="product-detail-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div id="productCarousel" class="carousel slide product-image-card" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($Photos as $photo)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset('uploads/product/' . $photo->strphoto) }}"
                                        class="d-block w-100 product-img" alt="Kashmiri Red Chilli">
                                </div>
                            @endforeach


                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-gold text-uppercase letter-spacing-2 mb-2">Premium Whole Spices</h6>
                    <h1 class="product-title display-5 mb-3">{{ $ProductDetail->productname ?? '' }}</h1>

                    <h3 class="product-price mb-4">₹ {{ $ProductDetail->rate ?? '' }} <span
                            class="text-white fs-6 text-decoration-line-through ms-2">₹
                            {{ $ProductDetail->cut_price ?? '' }}</span></h3>


                    @php
                        $selectedAttrId = $ProductDetail->min_attr_id ?? null;
                    @endphp
                    <form action="" class="mb-4">
                        <div class="row g-3 align-items-end">

                            <div class="col-sm-6">
                                <label class="form-label  small">Pack Size</label>
                                <select class="form-select custom-select" aria-label="Select Size">
                                    @foreach ($attributes as $attribute)
                                        <option value="{{ $attribute->id }}"
                                            data-text="{{ $attribute->product_attribute_qty . ' ' . $attribute->attribute_name }}"
                                            {{ (int) $attribute->id === (int) $selectedAttrId ? 'selected' : '' }}>
                                            {{ $attribute->product_attribute_qty . ' ' . $attribute->attribute_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label small">Quantity</label>
                                <div class="input-group">
                                    <input type="number" class="form-control custom-input" value="1" min="1">
                                    <a href="cart.html" class="btn btn-add-cart" type="button">
                                        Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>

                    <hr class="border-secondary my-4">

                    <ul class="list-unstyled benefits-list">
                        <li>
                            <i class="fas fa-check text-gold me-3"></i>
                            Naturally Vibrant Red (No Artificial Dyes)
                        </li>

                        <li>
                            <i class="fas fa-check text-gold me-3"></i>
                            Made from Sun-Dried, Stem-less Chillies
                        </li>

                        <li>
                            <i class="fas fa-check text-gold me-3"></i>
                            Cold-Ground to Retain Essential Oils
                        </li>

                        <li>
                            <i class="fas fa-check text-gold me-3"></i>
                            Perfect Balance of Heat & Aroma
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="simple-info-section py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="text-white border-bottom border-secondary pb-3 serif-font">
                        Description
                    </h3>
                </div>
            </div>
            <div class="mb-5">
                <h4 class="text-gold mb-3 serif-font">About this Item</h4>
                <div class="text-muted product-text-body">
                    <p>
                        Our Kashmiri Red Chilli Powder is a staple in Indian cooking, renowned for its brilliant red
                        color and mild pungency. Unlike ordinary chilli powders that focus on heat, this variety is
                        curated to add a rich texture and a smoky flavor profile to your curries.
                    </p>
                    <p>
                        Sourced directly from the farms in Kashmir, the chillies are sun-dried to preserve their natural
                        oils and then ground using temperature-controlled processes.
                    </p>
                </div>
            </div>



        </div>
    </section>

    <div class="row  pt-4 border-top border-secondary text-center">
        <div class="col-6 col-md-3 mb-3">
            <i class="fas fa-seedling text-gold mb-2 fs-4"></i>
            <h6 class="text-white small text-uppercase">100% Vegan</h6>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <i class="fas fa-ban text-gold mb-2 fs-4"></i>
            <h6 class="text-white small text-uppercase">Gluten Free</h6>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <i class="fas fa-flask text-gold mb-2 fs-4"></i>
            <h6 class="text-white small text-uppercase">No Additives</h6>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <i class="fas fa-shipping-fast text-gold mb-2 fs-4"></i>
            <h6 class="text-white small text-uppercase">Fresh Shipping</h6>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scroll Reveal Script
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');

            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                }
            }
        }

        // Trigger once on load
        reveal();
    </script>

    <script>
        function loadVideo(element, videoId) {
            // 1. Add 'playing' class to hide info cards and buttons
            element.classList.add('playing');

            // 2. Create the iframe
            var iframe = document.createElement('iframe');
            iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
            iframe.setAttribute('width', '100%');
            iframe.setAttribute('height', '100%');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow',
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
            iframe.setAttribute('allowfullscreen', '');

            // 3. Style the iframe to fill the card
            iframe.style.position = 'absolute';
            iframe.style.top = '0';
            iframe.style.left = '0';
            iframe.style.zIndex = '10'; // On top of image

            // 4. Append to the card
            element.appendChild(iframe);
        }
    </script>



@endsection
