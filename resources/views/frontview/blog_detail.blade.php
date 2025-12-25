@extends('layouts.front')

@section('opTag')
@section('title', "$Blog->metaTitle")
<meta name="description" content="{{ $Blog->metaDescription }}" />
<meta name="keywords" content="{{ $Blog->metaKeyword }} " />
<?php echo $Blog->head; ?>
<?php echo $Blog->body; ?>
@endsection

@section('content')


<!-- breadcrumb -->
<section class="breadcrumb-aromatic d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title mb-3 reveal">Blog Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                        <li class="breadcrumb-item active " aria-current="page">Blog Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="blog-detail-section py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <h1 class="blog-title mb-2">The Secret Behind Kashmiri Red Chilli: Why Origin Matters</h1>
                <p class="small mb-4">Posted on Dec 14, 2025</p>

                <div class="mb-4">
                    <img src="assets/image/chilli-powder.webp" class="img-fluid rounded border border-secondary"
                        alt="Kashmiri Chilli Process">
                </div>

                <div class="blog-content text-light">
                    <p class="mb-4">
                        Of late, traditional and authentic spices are back in fashion amongst health-conscious
                        people and families in India – and amongst these,
                        <a href="#" class="text-gold text-decoration-none fw-bold">Kashmiri Red Chilli</a> has
                        emerged as a front-runner.
                        But exactly what makes this variety so special compared to regular chilli powder? At
                        <strong>Velour Spices</strong>, we believe in purity, tradition, and holistic well-being –
                        and that’s exactly why we want you to understand what makes our Single-Origin Chilli unique.
                    </p>

                    <h3 class="text-red mt-5 mb-3 serif-font">What is Cold-Ground Spicing?</h3>
                    <p class="mb-4">
                        <strong>Cold-Ground</strong> essentially signifies spices processed through the traditional,
                        slow-grinding method. In this age-old process, the chillies are first sun-dried to crisp
                        perfection and then manually or slowly ground to extract the fine powder.
                    </p>
                    <p>
                        Unlike modern industrial machines that generate high heat (burning off the essential oils),
                        this artisanal process retains nutrients and has a <strong>richer flavor and aroma</strong>
                        compared to mass-produced powders. The volatile oils, known as <em>capsaicin</em>, remain
                        intact, giving you the true taste of the spice.
                    </p>

                    <h3 class="text-red mt-5 mb-3 serif-font">The "Stem-Less" Difference</h3>
                    <p>
                        Most commercial manufacturers grind the entire chilli—stem and all—to add bulk and weight.
                        We painstakingly remove the stems from every single chilli before grinding. This ensures
                        that you are paying for pure spice, not filler waste. The result is a brighter red color and
                        a purer heat profile.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 ps-lg-5 mt-5 mt-lg-0">
                <div class="sidebar-widget">
                    <h5 class="sidebar-title mb-4">Recent Posts</h5>

                    <div class="recent-posts-list">

                        <div class="d-flex mb-4 align-items-center recent-post-item">
                            <div class="flex-shrink-0">
                                <img src="assets/image/corriander-powder.webp" class="rounded recent-post-img"
                                    alt="Turmeric">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="blog-detail.html" class="recent-post-link">
                                    <h6 class="mb-1 text-white">The Healing Power of Turmeric & Curcumin</h6>
                                </a>
                                <small class="text-red">Dec 11, 2025</small>
                            </div>
                        </div>

                        <div class="d-flex mb-4 align-items-center recent-post-item">
                            <div class="flex-shrink-0">
                                <img src="assets/image/turmuric-powder.webp" class="rounded recent-post-img"
                                    alt="Cardamom">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="blog-detail.html" class="recent-post-link">
                                    <h6 class="mb-1 text-white">Why We Source from Kerala's High Ranges</h6>
                                </a>
                                <small class="text-red">Nov 28, 2025</small>
                            </div>
                        </div>

                        <div class="d-flex mb-4 align-items-center recent-post-item">
                            <div class="flex-shrink-0">
                                <img src="assets/image/chilli-flakes.webp" class="rounded recent-post-img"
                                    alt="Recipes">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="blog-detail.html" class="recent-post-link">
                                    <h6 class="mb-1 text-white">5 Winter Recipes using Garam Masala</h6>
                                </a>
                                <small class="text-red  ">Oct 15, 2025</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
