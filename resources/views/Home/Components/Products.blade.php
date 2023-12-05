<div>
    <h1 class="text-center text-xl tracking-widest my-16 bg-[#FCF4E9] text-[#CC8119] py-4 font-bold">New Arrival Products
    </h1>
    <div class="w-11/12 mx-auto">
        <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 mx-auto">
            @foreach ($productData as $product)
                @php $index = $loop->index; @endphp
                <div id="productContainer"
                    class="mb-12 mx-auto relative group overflow-hidden transition-transform duration-500 ease-in-out transform hover:scale-105"
                    style="{{ $index >= 10 ? 'display: none;' : '' }}">
                    <div
                        class="relative overflow-hidden rounded-lg group-hover:scale-110 transition-transform duration-500 ease-in-out">
                        <img class="md:w-60 md:h-72 w-40 h-40 object-cover rounded-lg transition-opacity duration-500 ease-in-out group-hover:opacity-0"
                            src="{{ $product['image'][0] }}" alt="">
                        <img class="md:w-60 md:h-72 w-40 h-40 object-cover rounded-lg absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out"
                            src="{{ $product['image'][1] }}" alt="">
                    </div>

                    <!-- Default product information -->
                    <div class="pt-4 pl-1">
                        <h1 class="font-semibold tracking-widest">{{ $product['productName'] }}</h1>
                        <h1 class="tracking-widest">${{ $product['sprice'] }}.00</h1>
                    </div>

                    <!-- Discount badge -->
                    @if (isset($product['discount']))
                        <div
                            class="absolute top-4 right-4 bg-[#DA3F3F] text-white px-3 text-sm font-semibold tracking-widest py-1 rounded-full">
                            -{{ $product['discount'] }}%
                        </div>
                    @endif

                    <!-- Wishlist, Add to Cart, and Zoom buttons -->
                    <div
                        class="hidden group-hover:flex flex-col absolute top-24 left-10 transform -translate-x-1/2 -translate-y-1/2">
                        <button class="text-black bg-white px-3 py-2 rounded-full transition duration-300 mb-2">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <button class="text-black bg-white px-3 py-2 rounded-full transition duration-300">
                            <i class="fa-regular fa-star"></i>
                        </button>
                        <button class=" mt-2 text-black bg-white px-3 py-2 rounded-full transition duration-300">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                    <div
                        class="hidden group-hover:flex absolute bottom-12 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <button class="bg-white text-sm tracking-widest px-4 py-2 rounded-full">Add To Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mb-2">
            <button id="loadMoreBtn"
                class="text-md tracking-widest px-10 py-3 rounded-full bg-black text-white hover:bg-transparent hover:text-black border border-black transition duration-300">Load
                More</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productContainer = document.getElementById('productContainer');
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            const products = document.querySelectorAll('.mb-12');

            const productsToShow = 10;
            let visibleProductCount = 10;

            // Initial display of the first products
            for (let i = 0; i < productsToShow; i++) {
                if (i < products.length) {
                    products[i].style.display = 'grid';
                }
            }

            loadMoreBtn.addEventListener('click', function() {
                for (let i = visibleProductCount; i < visibleProductCount + productsToShow; i++) {
                    if (i < products.length) {
                        products[i].style.display = 'grid';
                    }
                }

                visibleProductCount += productsToShow;

                if (visibleProductCount >= products.length) {
                    loadMoreBtn.style.display = 'none';
                }
            });
        });
    </script>

</div>
</div>
