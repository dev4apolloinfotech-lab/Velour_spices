{{--  @php

    use Illuminate\Http\Request;
    $session = Session::get('customer_id');
    $count = \Cart::getContent()->count();
    $cartItems = \Cart::getContent();
    $wishlist_count = App\Models\Wishlist::where([
        'iStatus' => 1,
        'isDelete' => 0,
        'customerid' => $session,
    ])->count();

    $ip = request()->ip();
    $countryCode = getCountryCode($ip);

    if ($countryCode === 'IN') {
        $symbol = '₹';
    } else {
        $symbol = '$';
    }

@endphp  --}}

<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <div class="logo-box">
                <img src="{{ asset('assets/front/assets/image/velour-01.png') }}" alt="RedSpice Logo" class="nav-logo">
            </div>
        </a>

        <div class="d-flex align-items-center d-lg-none ms-auto me-3">
            <a href="#" class="nav-icon-btn"><i class="far fa-user"></i></a>
            <a href="#" class="nav-icon-btn"><i class="fas fa-shopping-bag"></i><span
                    class="cart-badge">2</span></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto align-items-center">
                <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="shopDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Shop <i class="fas fa-chevron-down nav-arrow"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                        <li><a class="dropdown-item" href="product-list.html"> Spices</a></li>
                        <li><a class="dropdown-item" href="#">Herbs</a></li>

                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Recipe</a></li>
                <li class="nav-item"><a class="nav-link" href="contactus.html">Contact</a></li>
            </ul>

            <div class="d-none d-lg-flex align-items-center">
                <a href="#" class="nav-icon-btn"><i class="far fa-user"></i></a>
                <a href="cart.html" class="nav-icon-btn ms-4"><i class="fas fa-shopping-bag"></i><span
                        class="cart-badge">2</span></a>
            </div>
        </div>
    </div>
</nav>

<header id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators justify-content-start ps-5 mb-5" style="margin-left: 3%;">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-img-overlay"></div>
            <img src="{{ asset('assets/front/assets/image/banner-1.webp') }}" class="d-block w-100 hero-img"
                alt="Red Spices">

            <div class="carousel-caption">
                <p class="hero-sub-text text-red" style="border-color: var(--primary-red)">Est. 1985</p>
                <h1 class="hero-big-text">Fiery <span class="serif-font fst-italic text-red">Passion</span></h1>
                <p class="hero-desc">Experience the authentic heat of hand-picked Kashmiri Chilies. Sun-dried to
                    perfection.</p>
                <a href="#" class="btn-red-glow">Explore Collection</a>
            </div>
        </div>

        <div class="carousel-item">
            <div class="carousel-img-overlay"></div>
            <img src="{{ asset('assets/front/assets/image/banner-2.webp') }}" class="d-block w-100 hero-img"
                alt="Turmeric">

            <div class="carousel-caption">
                <p class="hero-sub-text text-gold" style="border-color: var(--accent-gold)">Pure Gold</p>
                <h1 class="hero-big-text">Golden <span class="serif-font fst-italic text-gold">Roots</span></h1>
                <p class="hero-desc">Healing turmeric with high curcumin content for your health.</p>
                <a href="#" class="btn-red-glow" style="background: var(--accent-gold); color: black;">View
                    Turmeric</a>
            </div>
        </div>

        <div class="carousel-item">
            <div class="carousel-img-overlay"></div>
            <img src="{{ asset('assets/front/assets/image/banner-3.webp') }}" class="d-block w-100 hero-img"
                alt="Spices">

            <div class="carousel-caption">
                <p class="hero-sub-text text-white" style="border-color: white">The Blend</p>
                <h1 class="hero-big-text">Secret <span class="serif-font fst-italic text-red">Alchemy</span></h1>
                <p class="hero-desc">Ancient recipes passed down through generations.</p>
                <a href="#" class="btn-red-glow">Discover Blends</a>
            </div>
        </div>
    </div>
</header>
