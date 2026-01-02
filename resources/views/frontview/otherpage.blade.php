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
                    <h1 class="page-title mb-3 reveal">{{ $page->pagename }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">{{ $page->pagename }}</li>
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
                            {{-- <h4 class="serif-font text-accent mb-3">1. Aromatic Privacy Standards</h4> --}}
                            <p class=""> {!! $page->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
