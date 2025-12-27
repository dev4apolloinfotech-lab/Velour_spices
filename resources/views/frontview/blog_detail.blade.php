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
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
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

                <h1 class="blog-title mb-2">{{ $Blog->strTitle ?? '' }}</h1>
                <p class="small mb-4">Posted on {{ $Blog->created_at->format('M d, Y') }}</p>

                <div class="mb-4">
                    <img src="{{ asset('uploads/Blog/' . $Blog->strPhoto) }}"
                        class="img-fluid rounded border border-secondary" alt="Kashmiri Chilli Process">
                </div>

                <div class="blog-content text-light">
                    <p class="mb-4">
                        {{ Str::limit(strip_tags($Blog->strDescription ?? ''), 70) }}
                    </p>

                </div>
            </div>

            <div class="col-lg-4 ps-lg-5 mt-5 mt-lg-0">
                <div class="sidebar-widget">
                    <h5 class="sidebar-title mb-4">Recent Posts</h5>

                    <div class="recent-posts-list">
                        @foreach ($RecentBlog as $recentblog)
                            <div class="d-flex mb-4 align-items-center recent-post-item">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('uploads/Blog/' . $recentblog->strPhoto) }}"
                                        class="rounded recent-post-img" alt="Turmeric">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="{{ route('front.blog_detail', $recentblog->strSlug) }}"
                                        class="recent-post-link">
                                        <h6 class="mb-1 text-white">{{ $recentblog->strTitle ?? '' }}</h6>
                                    </a>
                                    <small class="text-red">{{ $recentblog->created_at->format('M d, Y') }}</small>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
