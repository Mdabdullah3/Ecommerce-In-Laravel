<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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

<body>
    <div class="bg-[#f1f5fb] xl:h-screen dark:bg-gray-800">
        <div class="body-content" x-data="{ open: true }">
            <div class="relative lg:block navbar-menu">
                <nav x-bind:class="!open ? 'w-0' : 'w-[280px]'"
                    class="fixed top-0 transition-all lg:mt-0 mt-16 left-0 dark:bg-gray-900 bottom-0 flex flex-col w-[280px] bg-gray-800 overflow-hidden z-50"
                    id="sidenav">
                    <div class="flex items-center w-full px-4 pt-4 pb-4 border-b border-gray-600 dark:border-gray-700">
                        <a href="#">
                            <h2 class="ml-3 text-lg font-bold text-white whitespace-nowrap"> Dashboard </h2>
                        </a>
                    </div>
                    <div class="pb-6 mt-4 overflow-x-hidden overflow-y-auto">
                        <ul class="mb-8 text-sm">
                            <li>
                                <a href="#"
                                    class="flex items-center px-6 py-4 text-gray-300 dark:text-gray-400 dark:hover:bg-gray-800 group hover:text-white hover:bg-gray-900">

                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-6 py-4 text-gray-300 dark:text-gray-400 dark:hover:bg-gray-800 group hover:text-white hover:bg-gray-900">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-5 h-5 dark:group-hover:text-gray-300"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                    </span>
                                    <span> Category </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-6 py-4 text-gray-300 dark:text-gray-400 dark:hover:bg-gray-800 group hover:text-white hover:bg-gray-900">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-5 h-5 dark:group-hover:text-gray-300"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg>
                                    </span>
                                    <span> Blog </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-6 py-4 text-gray-300 dark:text-gray-400 dark:hover:bg-gray-800 group hover:text-white hover:bg-gray-900">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-5 h-5 dark:group-hover:text-gray-300"
                                            viewBox="0 0 16 16">
                                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            <path
                                                d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                        </svg>
                                    </span>
                                    <span> Gallery </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            {{-- Dynamic Content  --}}
            <div class="mx-auto transition-all content-wrapper" id="dash"
                x-bind:class="!open ? 'lg:ml-0' : 'lg:ml-[280px]'">
                <div class="p-4 lg:p-8">
                    <h1>This is a Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
