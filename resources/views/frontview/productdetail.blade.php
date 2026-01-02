@extends('layouts.front')

@section('title', 'Product Detail')

@section('content')
    <style>
        .benefits-list ul {
            list-style: none;
            padding-left: 0;
        }

        .benefits-list li::before {
            content: "✔";
            color: #c9a24d;
            margin-right: 8px;
        }
    </style>

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

                    <h3 class="product-price mb-4">
                        ₹ <span id="productPrice">{{ $ProductDetail->product_attribute_price }}</span>
                        <span id="productCutPrice" class="text-white fs-6 text-decoration-line-through ms-2">
                            ₹ {{ $ProductDetail->product_cut_attribute_price }}
                        </span>
                    </h3>

                    @php
                        use App\Models\ProductAttributes;

                        $selectedAttrId = ProductAttributes::where('product_id', $ProductDetail->id)
                            ->orderByRaw('CAST(product_attribute_price AS DECIMAL(10,2)) ASC')
                            ->value('id');
                    @endphp
                    {{-- <form action="" class="mb-4"> --}}
                    <div class="row g-3 align-items-end">

                        <div class="col-sm-6">
                            <label class="form-label  small">Pack Size</label>
                            <select class="form-select custom-select" id="attributeSelect">
                                @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}"
                                        data-price="{{ $attribute->product_attribute_price }}"
                                        data-cutprice="{{ $attribute->product_cut_attribute_price }}"
                                        data-text="{{ $attribute->product_attribute_qty . ' ' . $attribute->attribute_name }}"
                                        {{ (int) $attribute->id === (int) $selectedAttrId ? 'selected' : '' }}>
                                        {{ $attribute->product_attribute_qty }} {{ $attribute->attribute_name }}
                                    </option>
                                @endforeach
                            </select>


                        </div>

                        <div class="col-sm-6">
                            <label class="form-label small">Quantity</label>
                            <div class="input-group">
                                <input type="number" class="form-control custom-input" id="product_quantity"
                                    name="qty_display" value="1" min="1" step="1"
                                    oninput="syncQuantity()">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="productid" value="{{ $ProductDetail->id }}">
                                    <input type="hidden" name="categoryId" value="{{ $ProductDetail->categoryId }}">
                                    <input type="hidden" name="productname" value="{{ $ProductDetail->productname }}">
                                    <input type="hidden" name="image" value="{{ $ProductDetail->photo }}">
                                    <input type="hidden" name="attribute_id" id="cart_attribute_id"
                                        value="{{ $selectedAttrId }}">
                                    <input type="hidden" name="attribute_text" id="cart_attribute_text">
                                    <input type="hidden" name="price" id="cart_price"
                                        value="{{ $ProductDetail->rate }}">


                                    <input type="hidden" name="quantity" id="cart_quantity" value="1">
                                    <button type="submit" class="btn btn-add-cart" data-tooltip="Add to Cart">
                                        Add to Cart
                                    </button>
                                </form>
                                {{-- <a href="cart.html" class="btn btn-add-cart" type="button">

                                    </a> --}}
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}

                    <hr class="border-secondary my-4">

                    <div class="benefits-list">
                        {!! $ProductDetail->Keyword !!}
                    </div>

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
                        {!! $ProductDetail->description ?? '' !!}
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            syncQuantity();
        });
    </script>


    <script>
        function syncQuantity() {
            let qty = document.getElementById('product_quantity').value;

            qty = parseInt(qty);
            if (isNaN(qty) || qty < 1) {
                qty = 1;
            }

            document.getElementById('product_quantity').value = qty;
            document.getElementById('cart_quantity').value = qty;
        }
    </script>


    <script>
        document.getElementById('attributeSelect').addEventListener('change', function() {
            let selected = this.options[this.selectedIndex];

            let price = selected.dataset.price;
            let cutprice = selected.dataset.cutprice;

            let text = selected.dataset.text;
            let attrId = selected.value;

            // Update UI
            document.getElementById('productPrice').innerText = price;
            document.getElementById('productCutPrice').innerText = cutprice;


            // Update cart fields
            document.getElementById('cart_attribute_id').value = attrId;
            document.getElementById('cart_attribute_text').value = text;
            document.getElementById('cart_price').value = price;
        });

        // Trigger once on page load (for default attribute)
        document.getElementById('attributeSelect').dispatchEvent(new Event('change'));
    </script>



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
