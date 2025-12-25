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
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class="cart-img-wrapper">
                                                <img src="{{ asset('assets/front/assets/image/chilli-powder.webp') }}"
                                                    alt="Chilli Powder">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="text-white mb-0 serif-font">Kashmiri Red Chilli</h6>
                                                <span class=" small">Pack: 250g</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gold">₹ 450</td>
                                    <td>
                                        <div class="input-group qty-group">
                                            <button class="btn btn-qty" type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" class="form-control qty-input" value="1" readonly>
                                            <button class="btn btn-qty" type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-white fw-bold">₹ 450</td>
                                    <td class="text-end pe-4">
                                        <a href="#" class="btn text-danger btn-delete"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class="cart-img-wrapper">
                                                <img src="{{ asset('assets/front/assets/image/corriander-powder.webp') }}"
                                                    alt="Turmeric">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="text-white mb-0 serif-font">Organic Turmeric</h6>
                                                <span class=" small">Pack: 500g</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gold">₹ 320</td>
                                    <td>
                                        <div class="input-group qty-group">
                                            <button class="btn btn-qty" type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" class="form-control qty-input" value="2" readonly>
                                            <button class="btn btn-qty" type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-white fw-bold">₹ 640</td>
                                    <td class="text-end pe-4">
                                        <a href="#" class="btn text-danger btn-delete"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="product-list.html" class="text-decoration-none text-white hover-gold">
                            <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-summary-card">

                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control coupon-input" placeholder="Coupon Code">
                                <button class="btn btn-coupon" type="button">Apply</button>
                            </div>
                        </div>

                        <h4 class="serif-font text-white mb-4">Cart Summary</h4>

                        <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                            <span class="">Subtotal</span>
                            <span class="text-white">₹ 1090.00</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                            <span class="">Shipping</span>
                            <span class="text-success">Free</span>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <span class="text-gold fs-5 fw-bold">Total</span>
                            <span class="text-gold fs-5 fw-bold">₹ 1090.00</span>
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

    {{--  <script>
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
    </script>  --}}

@endsection
