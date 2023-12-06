<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link
        href="https://fonts.gstatic.com/s/heebo/v22/NGS6v5_NC0k9P9H2TbE.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD"
        rel="stylesheet" />
    <!-- Tailwind Css  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        font-family: 'Heebo';
    }
</style>

<body>
    @include('layouts.navbar')
    <section class="overflow-hidden py-11">
        <div class="max-w-7xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                            <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt=""
                                class="object-cover w-full lg:h-full ">
                        </div>
                        <div class="flex-wrap hidden md:flex ">
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#" class="block border hover:border-black">
                                    <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg"
                                        alt="" class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#" class="block border hover:border-black">
                                    <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg"
                                        alt="" class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#" class="block border hover:border-black">
                                    <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg"
                                        alt="" class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#" class="block border hover:border-black">
                                    <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg"
                                        alt="" class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="mb-8 ">
                            <h2
                                class="text-md tracking-widest bg-red-500 text-white font-semibold px-3 py-2 w-16 rounded-full my-3">
                                -10%</h2>
                            <h1 class="text-3xl font-semibold tracking-widest mb-3">Trainers Sneakers</h1>
                            <p class="inline-block mb-6 tracking-wider text-3xl text-black">
                                <span>$100.99</span>
                                <span class="text-base font-normal text-gray-500 line-through ">$1500.99</span>
                            </p>
                            <h1 class="text-sm tracking-widest"><span><i class="fa-regular fa-eye"></i></span>
                                <span class="font-bold">21</span> people
                                are viewing this right now
                            </h1>
                        </div>
                        <div class="flex items-center mb-8">
                            <h2 class="w-16 text-lg font-bold tracking-wider">
                                Size:</h2>
                            <div class="flex flex-wrap -mx-2 -mb-2 tracking-wider">
                                <button
                                    class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 dark:border-gray-400 hover:text-blue-600 ">XL
                                </button>
                                <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 ">S
                                </button>
                                <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 ">M
                                </button>
                                <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 ">XS
                                </button>
                            </div>
                        </div>
                        <label for="" class="w-full text-lg tracking-wider font-semibold ">Quantity</label>
                        <div class="grid md:grid-cols-3 grid-cols-1 items-center gap-10">
                            <div class="">
                                <div class="relative flex flex-row w-full h-12 mt-4 bg-transparent rounded-lg">
                                    <button
                                        class="w-20 h-full font-bold bg-gray-300 rounded-l outline-none cursor-pointer  hover:bg-gray-400">
                                        <span class="m-auto text-2xl font-thin">-</span>
                                    </button>
                                    <input type="number"
                                        class="flex items-center w-full font-semibold text-center text-black placeholder-black bg-gray-300 outline-nonefocus:outline-none text-md hover:text-black"
                                        placeholder="1">
                                    <button
                                        class="w-20 h-full text-black bg-gray-300 rounded-r outline-none cursor-pointer  hover:bg-gray-400 font-semibold">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                            </div>
                            <div class=" col-span-2 h-12 mt-3">
                                <button
                                    class="border border-black text-black w-full text-md tracking-widest py-3 rounded-lg transition duration-300 font-semibold hover:bg-black hover:text-white">Add
                                    To Cart</button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 ">
                            <div class="w-full px-4 mt-5">
                                <button
                                    class="flex items-center justify-center w-full py-3 rounded-lg font-semibold tracking-widest bg-black text-white border border-black transition duration-300 hover:bg-transparent hover:text-black">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="md:flex tracking-widest gap-10 items-center my-5">
                            <h1>
                                <i class="fa-solid fa-right-left"></i><span class="ml-1">Compare</span>
                            </h1>
                            <h1>
                                <i class="fa-regular fa-circle-question"></i> <span>Ask Question</span>
                            </h1>
                            <h1>
                                <i class="fa-solid fa-share-nodes"></i> <span>Share</span>
                            </h1>
                        </div>
                        <hr>
                        <div class="mt-5">
                            <h1 class="text-black tracking-wider text-md font-bold mb-2"> <i
                                    class="fa-solid fa-truck-fast"></i>
                                Estimated Delivery: <span class=" font-normal text-gray-600 ml-2">01 - 13 May,
                                    2024</span>
                            </h1>
                            <h1 class="text-black tracking-wider text-md font-bold"> <i
                                    class="fa-solid fa-truck-ramp-box"></i>
                                Free
                                Shipping & Returns: <span class=" font-normal text-gray-600 ml-2">On all orders over
                                    $200.00</span>
                            </h1>
                        </div>
                        <div class="bg-[#F7F7F7] py-5 mt-5 rounded-md flex flex-col items-center justify-center w-full">
                            <div>
                                <img src="https://minimog-4437.kxcdn.com/wp-content/themes/minimog/assets/woocommerce/product-trust-badge.png"
                                    alt="">
                            </div>
                            <div>
                                <h1 class="mt-2 tracking-wider">Guaranteed safe & secure checkout</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto mt-20">
        <div>
            <div>
                <h1 class="text-lg tracking-wider font-semibold">Product Details</h1>
            </div>

        </div>
    </section>
    @include('layouts.footer')

</body>

</html>
