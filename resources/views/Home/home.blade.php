<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luna Bee</title>
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link href="https://fonts.gstatic.com/s/heebo/v22/NGS6v5_NC0k9P9H2TbE.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD" rel="stylesheet" />
    <!-- Swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Tailwind Css  -->
    <script src="https://cdn.tailwindcss.com"></script>


    <style>
        body {
            font-family: 'Heebo';
        }

        :root {
            --swiper-navigation-size: 20px;
            --swiper-theme-color: #977f7f;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiperbtn .swiper-wrapper .swiper-slide-active .swiper-button-next {
            position: absolute;
            right: 18%;
            top: 0%;
            border: 1px solid #977f7f;
            padding: 30px;
            border-radius: 100%;
        }

        .swiper-button-prev {
            position: absolute;
            left: 2%;
            top: 45%;
            border: 1px solid #977f7f;
            padding: 30px;
            border-radius: 100%;
        }

        .swiper-button-next {
            position: absolute;
            right: 2%;
            top: 45%;
            border: 1px solid #977f7f;
            padding: 30px;
            border-radius: 100%;
        }

        .swiper-pagination-bullet {
            width: var(--swiper-pagination-bullet-width,
                    var(--swiper-pagination-bullet-size, 8px));
            height: var(--swiper-pagination-bullet-height,
                    var(--swiper-pagination-bullet-size, 8px));
            display: inline-block;
            background: #5d5a5a;
            border: 10px;
            opacity: var(--swiper-pagination-bullet-inactive-opacity, 0.2);
        }

        .swiper-pagination-bullet-active {
            width: var(--swiper-pagination-bullet-width,
                    var(--swiper-pagination-bullet-size, 12px));
            height: var(--swiper-pagination-bullet-height,
                    var(--swiper-pagination-bullet-size, 12px));
            opacity: var(--swiper-pagination-bullet-opacity, 1);
            background: var(--swiper-pagination-color, var(--swiper-theme-color));
        }
    </style>
</head>

<body class="">
    @include('layouts.navbar')
    @include('Home.Components.Banner')
    @include('Home.Components.Category')
    @include('Home.Components.Products')

    <!-- @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
    </div>
    @endif -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Your existing script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>
</body>

</html>