@extends('layouts.front')

@section('title', 'Product Listing')

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



    {{--  @include('common.frontmodalalert')  --}}

    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Product List</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">Spices</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- product list -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="prod-card">
                        <div class="prod-img-wrap">
                            <span class="badge-new">Best Seller</span>
                            <a href="product-detail.html">
                                <img src="{{ asset('assets/front/assets/image/chilli-powder.webp') }}" class="prod-img"
                                    alt="Kashmiri Chilli">
                            </a>
                            <div class="prod-icons-bar">
                                <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                        class="fas fa-shopping-cart"></i></a>
                                <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                        class="fas fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="prod-details">
                            <span class="prod-cat">Powder</span>
                            <a href="product-detail.html" class="prod-title"> Chilli Powder</a>
                            <div class="prod-price">₹600.00</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="prod-card">
                        <div class="prod-img-wrap">
                            <img src="{{ asset('assets/front/assets/image/corriander-powder.webp') }}" class="prod-img"
                                alt="Lakadong Turmeric">
                            <div class="prod-icons-bar">
                                <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                        class="fas fa-shopping-cart"></i></a>
                                <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                        class="fas fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="prod-details">
                            <span class="prod-cat"> Powder</span>
                            <a href="product-detail.html" class="prod-title">Coriander Powder</a>
                            <div class="prod-price">₹350.00</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="prod-card">
                        <div class="prod-img-wrap">
                            <span class="badge-new" style="background: var(--accent-gold); color: black;">New</span>
                            <img src="{{ asset('assets/front/assets/image/turmuric-powder.webp') }}" class="prod-img"
                                alt="Garam Masala">

                            <div class="prod-icons-bar">
                                <a href="cart.html" class="icon-btn" data-tooltip="Add to Cart"><i
                                        class="fas fa-shopping-cart"></i></a>
                                <a href="product-detail.html" class="icon-btn" data-tooltip="Quick View"><i
                                        class="fas fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="prod-details">
                            <span class="prod-cat">Powder</span>
                            <a href="product-detail.html" class="prod-title">Turmeric Powder</a>
                            <div class="prod-price">₹450.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
