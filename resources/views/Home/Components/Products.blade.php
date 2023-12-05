<div>
    <h1 class="text-center text-xl tracking-widest my-16 bg-[#FCF4E9] text-[#CC8119] py-4 font-bold">New Arrival Products
    </h1>
    <div class="w-11/12 mx-auto">
        <div class=" grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 mx-auto">
            @foreach ($productData as $product)
                <div class="mb-10 mx-auto relative">
                    <img class="md:w-60 md:h-72 w-40 h-40 rounded-lg" src="{{ $product['image'][0] }}" alt="">
                    <div class="pt-4 pl-1">
                        <h1 class="font-semibold tracking-widest">{{ $product['productName'] }}</h1>
                        <h1 class="tracking-widest">${{ $product['sprice'] }}.00</h1>
                    </div>
                    @if (isset($product['discount']))
                        <div
                            class="absolute top-4 right-4 bg-[#DA3F3F] text-white px-3 text-sm font-semibold tracking-widest py-1 rounded-full">
                            -{{ $product['discount'] }}%
                        </div>
                    @endif

                </div>
            @endforeach
        </div>
    </div>
</div>
