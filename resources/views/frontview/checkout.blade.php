@extends('layouts.front')
@section('title', 'Checkout')
@section('content')

    <div id="razorpay-gradient-bg"></div>
    <style>
        #razorpay-gradient-bg {
            background: linear-gradient(135deg, #2a7d3e, #8bc34a, #5ebd4b);
            background-size: 200% 200%;
            animation: moveGradient 6s ease infinite;
        }

        @keyframes moveGradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>

    @include('common.frontmodalalert')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="header-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                            <li class="breadcrumb-item active " aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout-section py-5">
        <div class="container">
            <form id="checkout-form">
                <div class="row">

                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <h3 class="serif-font text-white mb-4 border-bottom border-secondary pb-3">Billing Details</h3>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="phone" class="form-label custom-label">Phone *</label>
                                <input type="text" name="billPhone"
                                    class="form-control custom-input @error('billPhone') is-invalid @enderror"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    maxlength="10" minlength="10" required="required" autocomplete="off"
                                    value="{{ old('billPhone') }}">
                            </div>

                            <div class="col-md-6">

                            </div>

                            <div class="col-md-6">
                                <label for="firstName" class="form-label custom-label">First Name *</label>
                                <input type="text" name="billFirstName" class="form-control custom-input" id="firstName"
                                    placeholder="Enter first name" value="{{ old('billFirstName') }}" required="required"
                                    autocomplete="off">
                            </div>

                            <div class="col-md-6">
                                <label for="lastName" class="form-label custom-label">Last Name *</label>
                                <input type="text" name="billLastName" class="form-control custom-input" id="lastName"
                                    value="{{ old('billLastName') }}" placeholder="Enter last name" required="required"
                                    autocomplete="off">
                            </div>



                            <div class="col-md-6">
                                <label for="email" class="form-label custom-label">Email Address *</label>
                                <input type="email" name="billEmail"
                                    class="form-control custom-input @error('billEmail') is-invalid @enderror"
                                    id="email" value="{{ old('billEmail') }}" placeholder="name@example.com" required>
                                @error('billEmail')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label custom-label">Street Address *</label>
                                <input type="text" name="billStreetAddress1" class="form-control custom-input mb-3"
                                    id="address" placeholder="House number and street name" required="required"
                                    autocomplete="off" value="{{ old('billStreetAddress1') }}">
                                <input type="text" name="billStreetAddress2" class="form-control custom-input"
                                    id="address2" placeholder="Apartment, suite, unit, etc. (optional)" autocomplete="off"
                                    value="{{ old('billStreetAddress2') }}">
                            </div>

                            <div class="col-md-4">
                                <label for="city" class="form-label custom-label">Town / City *</label>
                                <input type="text" name="city" class="form-control custom-input" id="city"
                                    required value="{{ old('city') }}">
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label custom-label">State *</label>
                                <input type="text" name="state" class="form-control custom-input" id="state"
                                    required value="{{ old('state') }}">
                            </div>

                            <div class="col-md-4">
                                <label for="zip" class="form-label custom-label">PIN Code *</label>
                                <input type="text" name="pincode" class="form-control custom-input" id="zip"
                                    required value="{{ old('pincode') }}">
                            </div>

                            <div class="col-12">
                                <label for="notes" class="form-label custom-label">Order Notes (Optional)</label>
                                <textarea name="orderNote" class="form-control custom-input" id="notes" rows="4"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">{{ old('orderNote') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 ps-lg-5">
                        <div class="order-summary-card">
                            <h4 class="serif-font text-white mb-4">Your Order</h4>
                            @php
                                $cartItems = \Cart::getContent();
                                $subtotal = \Cart::getSubTotal();
                                $discount = session('discount', 0);
                                $grandTotal = $subtotal - $discount;
                            @endphp

                            <div class="d-flex justify-content-between border-bottom border-secondary pb-2 mb-3">
                                <span class="text-uppercase small letter-spacing-2">Product</span>
                                <span class="text-uppercase small letter-spacing-2">Subtotal</span>
                            </div>

                            @foreach ($cartItems as $item)
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h6 class="text-white mb-0">{{ $item->name . ' (' . $item->attribute_text . ')' }}
                                        </h6>
                                        <span class="text-red small">Qty:{{ $item->quantity }} X
                                            {{ $item->price }}</span>
                                    </div>
                                    <span class="text-light">₹
                                        {{ number_format($item->price * $item->quantity, 2) }}</span>
                                </div>
                            @endforeach



                            <div class="d-flex justify-content-between mb-2">
                                <span class="">Subtotal</span>
                                <span class="text-light fw-bold">₹ {{ number_format($subtotal, 2) }}</span>
                            </div>

                            @if ($discount > 0)
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="">Discount</span>
                                    <span class="text-light fw-bold">₹ {{ number_format($discount, 2) }}</span>
                                </div>
                            @endif

                            <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                                <span class="">Shipping</span>
                                <span class="text-success">Free Shipping</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="text-gold fs-5 fw-bold serif-font">Total</span>
                                <span class="text-gold fs-4 fw-bold">₹ {{ number_format($grandTotal, 2) }}</span>
                            </div>

                            <div class="payment-methods mb-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input custom-radio" type="radio" name="paymentMethod"
                                        id="upi" checked>
                                    <label class="form-check-label " for="upi">
                                        UPI / Credit Card / Netbanking
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" name="paymentMethod"
                                        id="cod">
                                    <label class="form-check-label " for="cod">
                                        Cash on Delivery
                                    </label>
                                </div>
                            </div>

                            {{-- <a href="#" type="submit" class="btn btn-place-order w-100">
                                Place Order
                            </a> --}}

                            <button type="submit"
                                class="btn btn-place-order w-100 {{ \Cart::isEmpty() ? 'disabled' : '' }}">
                                Place Order
                            </button>

                            <div class="text-center mt-3">
                                <span class="small"><i class="fas fa-shield-alt me-1"></i> SSL Secure
                                    Payment</span>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <!-- Razorpay Loader Overlay -->
    <div class="overlay" id="overlay"
        style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:1000;align-items:center;justify-content:center;">
        <div class="loader"
            style="border: 8px solid #f3f3f3; border-top: 8px solid #402d52; border-radius: 50%; width: 50px; height: 50px; animation: spin 2s linear infinite;">
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="processingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center p-4">
                <!--<h4>Thank you!</h4>-->
                <p>Your order is being processed. Please wait...</p>
                <div class="spinner-border text-primary mx-auto" role="status"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        function checkcustomer() {

            var phone = $('#billPhone').val();
            var url = "{{ route('front.get_userdata') }}";

            if (phone.length == 10) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        phone: phone,
                    },
                    success: function(data) {
                        console.log(data);

                        $('#billFirstName').val(data.firstname);
                        $('#billLastName').val(data.lastname);
                        $('#billEmail').val(data.customeremail);
                        $('#billStreetAddress1').val(data.address);
                        $('#billStreetAddress2').val(data.address1);
                        $('#billState').val(data.state);

                        $('#shipping_city').val(data.city);
                        // $('#strCountry').val(obj.country);
                        $('#billPinCode').val(data.pincode);
                    }
                });
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        // ✅ CSRF Setup for all AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function showLoader() {
            document.getElementById('overlay').style.display = 'flex';
        }

        function hideLoader() {
            document.getElementById('overlay').style.display = 'none';
        }

        $('#checkout-form').submit(function(e) {

            e.preventDefault();
            showLoader();

            // Clear old errors
            $('.invalid-feedback').remove();
            $('.is-invalid').removeClass('is-invalid');


            $.ajax({
                url: "{{ route('checkoutstore') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {

                        // Show modal
                        $('#processingModal').modal('show');

                        const options = {
                            "key": "{{ config('app.razorpay_key') }}",
                            "amount": response.amount * 100,
                            "currency": response.currency,
                            "order_id": response.razorpay_order_id,
                            "name": "Oro Veda",
                            "description": "Order Payment",
                            "theme": {
                                "color": "#2a7d3e" // your main brand color
                            },
                            "handler": function(r) {
                                $('#razorpay-gradient-bg').fadeOut(300);
                                $.post("{{ route('razprpay.success') }}", {
                                    razorpay_payment_id: r.razorpay_payment_id,
                                    razorpay_order_id: r.razorpay_order_id,
                                    razorpay_signature: r.razorpay_signature,
                                    orderId: response.order_id
                                }, function(res) {
                                    // Use res.id instead of res directly
                                    window.location.href =
                                        "{{ route('razorpay.thankyou', ':id') }}"
                                        .replace(':id', res.id);
                                });
                            },
                            "prefill": {
                                "name": response.customer_name,
                                "email": response.email,
                                "contact": response.mobile
                            },
                            "modal": {
                                ondismiss: function() {
                                    $('#razorpay-gradient-bg').fadeOut(300);
                                }
                            },

                            modal: {
                                ondismiss: function() {
                                    // Hide the processing modal
                                    $('#processingModal').modal('hide');
                                    // Mark payment as failed
                                    $.post("{{ route('razorpay.payment_cancel_by_user') }}", {
                                        orderId: response.order_id,
                                    }, function() {
                                        window.location.href =
                                            "{{ route('razorpay.RazorFail') }}";
                                    }).fail(function() {
                                        hideLoader();
                                    });
                                }
                            }
                        };
                        const rzp = new Razorpay(options);

                        // Show gradient overlay before opening modal
                        $('#razorpay-gradient-bg').fadeIn(300);
                        rzp.open();
                        hideLoader();
                    } else {
                        alert('Something went wrong.');
                        hideLoader();
                    }
                },
                error: function(xhr) {

                    hideLoader();

                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;

                        $.each(errors, function(field, messages) {
                            const input = $('[name="' + field + '"]');

                            if (input.length) {
                                input.addClass('is-invalid');

                                // Add error message
                                const errorDiv = $(
                                        '<div class="invalid-feedback d-block"></div>')
                                    .text(messages[0]);

                                input.after(errorDiv);
                            } else {
                                // If field not found, show toast or alert
                                toastr.error(messages[0]);
                            }
                        });
                    } else {
                        toastr.error('An unexpected error occurred.');
                    }
                }
            });
        });
    </script>

@endsection
