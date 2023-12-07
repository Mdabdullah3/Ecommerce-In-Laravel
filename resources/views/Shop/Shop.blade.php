<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link
        href="https://fonts.gstatic.com/s/heebo/v22/NGS6v5_NC0k9P9H2TbE.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD"
        rel="stylesheet" />

    <style>
        body {
            font-family: 'Heebo';
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <section class="py-16 ">
        <div class="px-4 py-4 mx-auto w-11/12 lg:py-6 md:px-6">
            <div class="flex flex-wrap mb-24 -mx-3">
                <div class="w-full pr-2 lg:w-1/4 lg:block">
                    <div class="p-4 mb-5 border border-gray-200 ">
                        <h2 class="text-2xl font-bold tracking-wider">Categories Filters</h2>
                        <div class="w-40 pb-2 mb-6 border-b border-rose-600 "></div>
                        <ul>
                            <li class="mb-4">
                                <label for="" class="flex items-center ">
                                    <input type="checkbox" class="w-4 h-4 mr-2">
                                    <span class="text-lg">Biscuits</span>
                                </label>
                            </li>
                            <li class="mb-4">
                                <label for="" class="flex items-center  ">
                                    <input type="checkbox" class="w-4 h-4 mr-2 ">
                                    <span class="text-lg">Fruits</span>
                                </label>
                            </li>
                            <li class="mb-4">
                                <label for="" class="flex items-center ">
                                    <input type="checkbox" class="w-4 h-4 mr-2">
                                    <span class="text-lg">Seafood</span>
                                </label>
                            </li>
                        </ul>
                        <a href="#"
                            class="text-base font-medium text-blue-500 hover:underline dark:text-blue-400">View
                            More</a>
                    </div>
                    <div class="p-4 mb-5 border border-gray-200 ">
                        <h2 class="text-2xl font-bold  tracking-wider">Product Status</h2>
                        <div class="w-40 pb-2 mb-6 border-b border-rose-600 "></div>
                        <ul>
                            <li class="mb-4">
                                <label for="" class="flex items-center ">
                                    <input type="checkbox" class="w-4 h-4 mr-2">
                                    <span class="text-lg">In Stock</span>
                                </label>
                            </li>
                            <li class="mb-4">
                                <label for="" class="flex items-center ">
                                    <input type="checkbox" class="w-4 h-4 mr-2">
                                    <span class="text-lg">On Sale</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="p-4 mb-5 bg-white border border-gray-200 ">
                        <h2 class="text-2xl font-bold tracking-wider">Price</h2>
                        <div class="w-16 pb-2 mb-6 border-b border-rose-600 "></div>
                        <div>
                            <input type="range"
                                class="w-full h-1 mb-4 bg-blue-100 rounded appearance-none cursor-pointer"
                                max="100" value="50">
                            <div class="flex justify-between ">
                                <span class="inline-block text-lg font-bold text-blue-400 ">$1</span>
                                <span class="inline-block text-lg font-bold text-blue-400 ">$500</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 lg:w-3/4">

                    <div class="flex flex-wrap items-center ">
                        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                            <div class="border border-gray-300 ">
                                <div class="relative bg-gray-200">
                                    <a href="#" class="">
                                        <img src="https://i.postimg.cc/MKH0cVX5/pexels-pixabay-264636.jpg"
                                            alt="" class="object-cover w-full h-56 mx-auto ">
                                    </a>
                                </div>
                                <div class="p-3 ">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="text-xl font-medium dark:text-gray-400">
                                            Product name
                                        </h3>

                                    </div>
                                    <p class="text-lg ">
                                        <span class="text-green-600 dark:text-green-600">$800.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')

</body>

</html>
