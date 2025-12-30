@extends('layouts.front')
@section('title', 'Cart')
@section('content')

    {{--  @include('common.frontmodalalert')  --}}

    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-section py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-4">
                    <div class="table-responsive">
                        <table class="table cart-table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-4">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col" class="text-end pe-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="cart-img-wrapper">
                                                    <img src="{{ asset('uploads/product') . '/' . $item->attributes->image }}"
                                                        alt="{{ $item->name }}">
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="text-white mb-0 serif-font">{{ $item->name }}</h6>
                                                    <span
                                                        class="small">{{ $item->price . ' (' . $item->attribute_text . ')' }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-gold">₹ {{ $item->price }}</td>
                                        <td>
                                            <div class="input-group qty-group">
                                                <button onclick="decreaseCount(this, {{ $item->id }})"
                                                    class="btn btn-qty" type="button"><i class="fas fa-minus"></i></button>
                                                <input type="text" class="form-control qty-input"
                                                    value="{{ $item->quantity }}" data-price="{{ $item->price }}"
                                                    data-symbol="₹" id="quantity_{{ $item->id }}"
                                                    value="{{ $item->quantity }}" readonly>
                                                <button onclick="increaseCount(this, {{ $item->id }})"
                                                    class="btn btn-qty" type="button"><i class="fas fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td class="text-white fw-bold" id="total_{{ $item->id }}">₹
                                            {{ $item->price * $item->quantity }}</td>
                                        <td class="text-end pe-4">
                                            <form action="{{ route('cart.remove') }}" method="post"
                                                onsubmit="return confirm('Are you sure you want to remove this item?');">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">


                                                <button type="submit" class="btn text-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('front.index') }}" class="text-decoration-none text-white hover-gold">
                            <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-summary-card">

                        <form class="mb-30" action="{{ route('couponcodeapply') }}" method="post">
                            @csrf
                            <input type="hidden" name="totalAmount" value="{{ \Cart::getTotal() }}">

                            <div class="mb-4">
                                <div class="input-group">
                                    <input type="text" name="coupon" class="form-control coupon-input"
                                        placeholder="Coupon Code" required autocomplete="off">
                                    <button class="btn btn-coupon" type="submit">Apply</button>
                                </div>
                            </div>
                        </form>

                        <h4 class="serif-font text-white mb-4">Cart Summary</h4>

                        <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                            <span class="">Subtotal</span>
                            <span class="text-white" id="subtotal">₹ {{ \Cart::getSubTotal() }}</span>
                        </div>

                        {{-- <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                            <span class="">Discount</span>
                            <span class="text-white" id="subtotal">₹ {{ \Cart::getSubTotal() }}</span>
                        </div> --}}

                        @if (Session::has('discount'))
                            <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                                <div>
                                    <h6 class="mb-0">
                                        Coupon <span class="badge badge-pill badge-success btn-primary-2025">
                                            ₹ {{ Session::get('applied_coupon_code') }}
                                        </span>
                                    </h6>
                                </div>

                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <h6 class="mb-0 mr-2 text-white  ">-
                                        {{ Session::get('discount') }}</h6>
                                    <form action="{{ route('couponcoderemove') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle p-1"
                                            title="Remove Coupon">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                            <span class="">Shipping</span>
                            <span class="text-success">Free</span>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <span class="text-gold fs-5 fw-bold">Total</span>
                            @php
                                $subtotal = \Cart::getSubTotal();
                                $discount = Session::get('discount', 0);

                                $total = $subtotal - $discount;
                            @endphp
                            <span class="text-gold fs-5 fw-bold" id="total">₹ {{ $total }}</span>
                        </div>

                        <a href="{{ route('front.checkout') }}" class="btn btn-checkout w-100">
                            Proceed to Checkout
                        </a>

                        <div class="mt-3 text-center">
                            <p class="small  mb-0"><i class="fas fa-lock me-1"></i> Secure Checkout</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

@section('scripts')

    <script>
        function increaseCount(a, itemId) {
            var input = document.getElementById('quantity_' + itemId);
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;

            updateCart(itemId, value);
        }

        function decreaseCount(a, itemId) {
            var input = document.getElementById('quantity_' + itemId);
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value--;

                updateCart(itemId, value);
            }
        }

        function updateCart(itemId, quantity) {
            let token = '{{ csrf_token() }}';

            fetch("{{ route('cart.update') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token
                    },
                    body: JSON.stringify({
                        id: itemId,
                        quantity: quantity
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {

                        let input = document.getElementById('quantity_' + itemId);
                        let price = parseFloat(input.getAttribute('data-price')) || 0;
                        let symbol = input.getAttribute('data-symbol');

                        let total = price * quantity;

                        // ✅ update row total with symbol
                        document.getElementById('total_' + itemId).innerText = symbol + total.toFixed(2);

                        // ✅ update quantity input value
                        input.value = quantity;

                        // ✅ update subtotal and total in summary with symbol
                        if (data.cart_summary) {
                            document.getElementById('subtotal').innerText = symbol + data.cart_summary.subtotal.toFixed(
                                2);
                            document.getElementById('total').innerText = symbol + data.cart_summary.total.toFixed(2);
                        }


                    }
                });
        }
    </script>

@endsection
