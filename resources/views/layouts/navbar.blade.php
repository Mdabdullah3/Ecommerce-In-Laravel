<div>
    <div class="bg-[#DA3F3F] py-2">
        <h1 class="text-md tracking-wider capitalize text-center text-white">Free Delivery on orders over $200. Don’t
            miss discount. <span><i class="fa-regular fa-heart"></i></span></h1>
    </div>
    <div class="w-11/12 mx-auto my-4">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-semibold tracking-widest">
                    <a href="{{ url('/') }}">Luna Bee.</a>
                </h1>
            </div>
            <div class=" list-none flex gap-10 tracking-widest text-lg items-center">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="relative group z-10">
                    <span class="cursor-pointer">
                        <a href="{{ url('/shop') }}"> Shop</a>
                    </span>
                    <div
                        class="absolute w-96 left-0 top-5 mt-2 bg-gray-900 border rounded-lg p-4 space-y-2 hidden group-hover:block transition duration-300">
                        <div class="grid grid-cols-4 gap-4 text-sm tracking-widest text-gray-400 py-4 cursor-pointer">
                            <div class="text-white">Men</div>
                            <div class="text-white-500">Women</div>
                            <div class="text-white">Kids</div>
                            <div>Pants</div>
                            <div>T-Shirts</div>
                            <div>Accessories</div>
                            <div>Shirts</div>
                            <div class="text-white">Watch</div>
                            <div>Panjabi</div>
                            <div>Bags</div>
                            <div>Shoes</div>
                            <div>Rings</div>
                        </div>
                    </div>
                </li>
                <li class="cursor-pointer">
                    Blog
                </li>
                <li class="cursor-pointer">
                    Contact
                </li>
            </div>
            <div class="flex gap-10 tracking-widest text-lg">
                <h1 class="relative group">
                    <a href="{{ url('login') }}" class="tooltip">
                        <i class="fa-solid fa-magnifying-glass"></i> <span
                            class="hidden group-hover:inline-block bg-black text-white text-xs rounded p-1 absolute bottom-full left-1/2 transform -translate-x-1/2">Search</span>
                    </a>
                </h1>
                <h1 class="relative group">
                    <a href="{{ url('login') }}" class="tooltip">
                        <i class="fa-solid fa-cart-shopping"></i> <span
                            class="hidden group-hover:inline-block bg-black text-white text-xs rounded p-1 absolute bottom-full left-1/2 transform -translate-x-1/2">Cart</span>
                    </a>
                </h1>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                @endauth
                @guest
                    <h1 class="relative group">
                        <a href="{{ url('login') }}" class="tooltip">
                            <i class="fa-solid fa-user"></i>
                            <span
                                class="hidden group-hover:inline-block bg-black text-white text-xs rounded p-1 absolute bottom-full left-1/2 transform -translate-x-1/2">Login</span>
                        </a>
                    </h1>
                @endguest
            </div>
        </div>
    </div>
</div>
