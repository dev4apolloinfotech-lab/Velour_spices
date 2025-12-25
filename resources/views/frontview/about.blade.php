@extends('layouts.front')
@section('title', 'About Us')
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

    {{--  @include('common.alert')  --}}

    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: var(--bg-dark);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('assets/front/assets/image/banner-1.webp') }}" alt="Velour Spices"
                            class="img-fluid rounded-0 shadow-lg main-about-img">
                        <div class="experience-badge-dark">
                            <h2 class="text-white mb-0 fw-bold">25+</h2>
                            <p class="small mb-0 text-uppercase tracking-wider opacity-75">Years of Heritage</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 reveal">
                    <h6 class="text-accent text-uppercase fw-bold mb-3 tracking-widest">Since Generations</h6>
                    <h2 class="serif-font text-white display-5 mb-4">Pure Spices from the <br><span class="text-red">Heart
                            of India</span></h2>
                    <p class=" mb-4 lead">Velour Spices was founded on the principle of absolute purity. We
                        believe that every meal deserves the authentic, vibrant aromas that only ethically sourced,
                        hand-picked spices can provide.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-sm-6">
                            <div class="feature-pill-dark">
                                <i class="fas fa-leaf text-red me-3"></i>
                                <span class="text-white fw-bold">100% Organic</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-pill-dark">
                                <i class="fas fa-handshake text-red me-3"></i>
                                <span class="text-white fw-bold">Ethical Sourcing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="m-0 border-secondary opacity-25">
    <section class="py-5" style="background-color: var(--bg-secondary);">
        <div class="container py-5">
            <div class="text-center mb-5 reveal">
                <h2 class="serif-font text-white display-6">The Velour Promise</h2>
                <div class="promise-line-red mx-auto mt-3"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4 reveal">
                    <div class="promise-card-dark">
                        <div class="icon-circle-gold"><i class="fas fa-microscope"></i></div>
                        <h4 class="text-white mt-4">Lab Tested</h4>
                        <p class="small">Every batch undergoes rigorous quality checks to ensure zero
                            adulteration and maximum potency.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="promise-card-dark active">
                        <div class="icon-circle-gold"><i class="fas fa-mortar-pestle"></i></div>
                        <h4 class="text-white mt-4">Traditional Process</h4>
                        <p class="small">We use cold-grinding methods to keep natural essential oils and
                            vibrant colors intact.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="promise-card-dark">
                        <div class="icon-circle-gold"><i class="fas fa-leaf"></i></div>
                        <h4 class="text-white mt-4">Eco-Packaging</h4>
                        <p class="small">Sustainable packaging designed to lock in freshness and aroma for a
                            longer shelf life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
