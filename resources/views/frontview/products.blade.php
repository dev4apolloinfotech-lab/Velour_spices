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

    @include('common.frontmodalalert')

    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Product List</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">{{ $Category->categoryname ?? '' }}</li>
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

                @foreach ($products as $pro)
                    <div class="col-md-6 col-lg-3 reveal">
                        <div class="prod-card">
                            <div class="prod-img-wrap">
                                {{-- <span class="badge-new">Best Seller</span> --}}
                                <a href="{{ route('front.product_detail', [$pro->category_slug, $pro->slugname]) }}">
                                    <img src="{{ asset('uploads/product/' . $pro->photo) }}" class="prod-img"
                                        alt="Kashmiri Chilli">
                                </a>
                                <div class="prod-icons-bar">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="productid" value="{{ $pro->id }}">
                                        <input type="hidden" name="categoryId" value="{{ $pro->categoryId }}">
                                        <input type="hidden" name="productname" value="{{ $pro->productname }}">
                                        <input type="hidden" name="image" value="{{ $pro->photo }}">
                                        <input type="hidden" name="attribute_id" value="{{ $pro->attribute_id }}">
                                        <input type="hidden" name="attribute_text"
                                            value="{{ $pro->product_attribute_qty . ' ' . $pro->attribute_name }}">
                                        <input type="hidden" name="price" value="{{ $pro->rate }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="icon-btn" data-tooltip="Add to Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </form>

                                    <a href="{{ route('front.product_detail', [$pro->category_slug, $pro->slugname]) }}"
                                        class="icon-btn" data-tooltip="Quick View"><i class="fas fa-eye"></i></a>

                                </div>
                            </div>
                            <div class="prod-details">
                                {{-- <span class="prod-cat">Powder</span> --}}
                                <a href="{{ route('front.product_detail', [$pro->category_slug, $pro->slugname]) }}"
                                    class="prod-title">{{ $pro->productname ?? '' }}</a>
                                <div class="prod-price">₹{{ $pro->rate ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
