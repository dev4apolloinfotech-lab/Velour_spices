@extends('layouts.front')
@section('title', 'About Us')
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

    {{--  @include('common.alert')  --}}


    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-3 my-3">
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="card blog-card">
                    <div class="blog-img-container">
                        <div class="blog-date">12 OCT</div>
                        <a href="blog-detail.html">
                            <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?q=80&w=1000&auto=format&fit=crop"
                                class="blog-img" alt="Rogan Josh">
                        </a>
                    </div>
                    <div class="card-body px-0">
                        <a href="blog-detail.html" class="text-decoration-none">
                            <h4 class="text-red card-title mt-3 serif-font h5">The Secret to the Perfect Rogan Josh</h4>
                        </a>
                        <p class="text-white small">Understanding the role of Rattanjot and Kashmiri Chilli in achieving
                            that signature red color without artificial dyes.</p>
                        <a href="blog-detail.html" class="blog-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
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
        <div class="row mt-4">
            <div class="col-12">
                <nav aria-label="Blog pagination">
                    <ul class="pagination justify-content-center custom-pagination">

                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>

                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </section>

@endsection
