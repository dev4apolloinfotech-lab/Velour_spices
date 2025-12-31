<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Velour Spices</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@200;300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg-dark: #050505;
            --primary-red: #c5470b;
            --accent-gold: #C5A059;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            background-color: var(--bg-dark);
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Ambient Glow Background */
        .thank-you-wrapper {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Increased the dark radial gradient to keep text clear in the center */
            background: radial-gradient(circle at center, rgba(5, 5, 5, 0.4) 0%, rgba(5, 5, 5, 1) 85%);
        }

        .thank-you-card {
            text-align: center;
            max-width: 650px;
            padding: 20px;
            z-index: 5;
            /* Keeps text above the image */
        }

        /* Refined Pulse Icon */
        .success-icon-wrap {
            position: relative;
            width: 110px;
            height: 110px;
            margin: 0 auto 40px;
        }

        .success-icon {
            width: 100%;
            height: 100%;
            background: transparent;
            border: 1px solid var(--accent-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: var(--accent-gold);
            position: relative;
            z-index: 2;
        }

        .icon-pulse {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 1px solid var(--accent-gold);
            animation: pulse-ring 2.5s infinite;
            z-index: 1;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.9);
                opacity: 0.8;
            }

            100% {
                transform: scale(1.6);
                opacity: 0;
            }
        }

        /* Typography */
        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .thank-you-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: -1px;
        }

        .order-status {
            color: var(--accent-gold);
            text-transform: uppercase;
            letter-spacing: 6px;
            font-size: 0.75rem;
            margin-bottom: 30px;
            display: block;
            opacity: 0.9;
        }

        .thank-you-message {
            color: #b0b0b0;
            line-height: 2;
            font-weight: 300;
            margin-bottom: 45px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Luxury Button */
        .btn-premium {
            background: transparent;
            border: 1px solid var(--primary-red);
            color: #fff;
            padding: 15px 45px;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.7rem;
            font-weight: 600;
            transition: all 0.5s cubic-bezier(0.2, 1, 0.3, 1);
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }

        .btn-premium:hover {
            background: var(--primary-red);
            color: #fff;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(197, 71, 11, 0.3);
        }

        /* Updated Image Style for more visibility */
        .spice-shadow {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            /* Controls how much of the bottom it covers */
            object-fit: cover;
            opacity: 0.6;
            /* Increased from 0.15 to 0.6 for better visibility */
            pointer-events: none;
            /* Removed grayscale to show the rich colors of the spices */
            filter: brightness(0.7);
            z-index: 1;
            /* Added a mask to fade the top of the image into the black background */
            -webkit-mask-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            mask-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        }
    </style>
</head>

<body>

    <div class="thank-you-wrapper">
        <div class="thank-you-card">
            <div class="success-icon-wrap">
                <div class="success-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="icon-pulse"></div>
            </div>

            <span class="order-status">Success</span>
            <h1 class="thank-you-title serif-font">Thank You</h1>

            <p class="thank-you-message">
                Your journey into authentic flavors begins here. We have received your order and are currently
                hand-picking the finest spices for your kitchen.
            </p>

            <a href="{{ route('front.index') }}" class="btn-premium">Return to Home</a>
        </div>

        <img src="assets/image/thank-you.jpeg" class="spice-shadow" alt="">
    </div>

</body>

</html>
