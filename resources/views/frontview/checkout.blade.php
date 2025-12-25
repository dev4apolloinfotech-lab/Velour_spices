@extends('layouts.front')
@section('title', 'Checkout')
@section('content')




    {{--  @include('common.frontmodalalert')  --}}
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}">  --}}

    <!-- breadcrumb -->
    <section class="breadcrumb-aromatic d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title mb-3 reveal">Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
            <form action="#">
                <div class="row">

                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <h3 class="serif-font text-white mb-4 border-bottom border-secondary pb-3">Billing Details</h3>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="phone" class="form-label custom-label">Phone *</label>
                                <input type="tel" class="form-control custom-input" id="phone"
                                    placeholder="10-digit mobile number" required>
                            </div>

                            <div class="col-md-6">

                            </div>

                            <div class="col-md-6">
                                <label for="firstName" class="form-label custom-label">First Name *</label>
                                <input type="text" class="form-control custom-input" id="firstName"
                                    placeholder="Enter first name" required>
                            </div>

                            <div class="col-md-6">
                                <label for="lastName" class="form-label custom-label">Last Name *</label>
                                <input type="text" class="form-control custom-input" id="lastName"
                                    placeholder="Enter last name" required>
                            </div>



                            <div class="col-md-6">
                                <label for="email" class="form-label custom-label">Email Address *</label>
                                <input type="email" class="form-control custom-input" id="email"
                                    placeholder="name@example.com" required>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label custom-label">Street Address *</label>
                                <input type="text" class="form-control custom-input mb-3" id="address"
                                    placeholder="House number and street name" required>
                                <input type="text" class="form-control custom-input" id="address2"
                                    placeholder="Apartment, suite, unit, etc. (optional)">
                            </div>

                            <div class="col-md-4">
                                <label for="city" class="form-label custom-label">Town / City *</label>
                                <input type="text" class="form-control custom-input" id="city" required>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label custom-label">State *</label>
                                <select class="form-select custom-input" id="state" required>
                                    <option value="" selected disabled>Select State</option>
                                    <option>Gujarat</option>
                                    <option>Maharashtra</option>
                                    <option>Rajasthan</option>
                                    <option>Delhi</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="zip" class="form-label custom-label">PIN Code *</label>
                                <input type="text" class="form-control custom-input" id="zip" required>
                            </div>

                            <div class="col-12">
                                <label for="notes" class="form-label custom-label">Order Notes (Optional)</label>
                                <textarea class="form-control custom-input" id="notes" rows="4"
                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 ps-lg-5">
                        <div class="order-summary-card">
                            <h4 class="serif-font text-white mb-4">Your Order</h4>

                            <div class="d-flex justify-content-between border-bottom border-secondary pb-2 mb-3">
                                <span class="text-uppercase small letter-spacing-2">Product</span>
                                <span class="text-uppercase small letter-spacing-2">Subtotal</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h6 class="text-white mb-0">Kashmiri Red Chilli</h6>
                                    <span class="text-red small">Qty: 1 x ₹450</span>
                                </div>
                                <span class="text-light">₹ 450.00</span>
                            </div>

                            <div
                                class="d-flex justify-content-between align-items-center mb-4 border-bottom border-secondary pb-4">
                                <div>
                                    <h6 class="text-white mb-0">Organic Turmeric</h6>
                                    <span class="text-red small">Qty: 2 x ₹320</span>
                                </div>
                                <span class="text-light">₹ 640.00</span>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span class="">Subtotal</span>
                                <span class="text-light fw-bold">₹ 1090.00</span>
                            </div>

                            <div class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-3">
                                <span class="">Shipping</span>
                                <span class="text-success">Free Shipping</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="text-gold fs-5 fw-bold serif-font">Total</span>
                                <span class="text-gold fs-4 fw-bold">₹ 1090.00</span>
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

                            <a href="#" type="submit" class="btn btn-place-order w-100">
                                Place Order
                            </a>

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



@endsection

@section('scripts')


@endsection
