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

    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Privacy Policy</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5" style="background-color: var(--bg-dark);">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="policy-wrapper p-4 p-md-5"
                        style="background-color: var(--bg-secondary); border: 1px solid #1a1a1a;">

                        <div class="policy-item mb-5">
                            <h4 class="serif-font text-accent mb-3">1. Aromatic Privacy Standards</h4>
                            <p class="">At Velour Spices, we respect the bond between the chef and their
                                ingredients. Just as we protect the purity of our spices, we protect the purity of your
                                personal data. This policy details how we handle information collected through our
                                premium spice portal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
