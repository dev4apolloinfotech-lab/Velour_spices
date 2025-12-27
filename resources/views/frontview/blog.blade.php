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
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
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
            @foreach ($blogs as $blog)
                <div class="col-md-4 reveal">
                    <div class="card blog-card">
                        <div class="blog-img-container">
                            <div class="blog-date">{{ $blog->created_at->format('M d, Y') }}</div>
                            <a href="{{ route('front.blog_detail', $blog->strSlug) }}">
                                <img src="{{ asset('uploads/Blog/' . $blog->strPhoto) }}" class="blog-img" alt="Rogan Josh">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <a href="{{ route('front.blog_detail', $blog->strSlug) }}" class="text-decoration-none">
                                <h4 class="text-red card-title mt-3 serif-font h5">{{ $blog->strTitle ?? '' }}</h4>
                            </a>
                            <p class="text-white small">
                                {{ Str::limit(strip_tags($blog->strDescription ?? ''), 70) }}
                            </p>
                            <a href="{{ route('front.blog_detail', $blog->strSlug) }}" class="blog-link">Read More <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach





        </div>

    </section>

@endsection
