<div class="mt-12">
    <h1 class="text-center text-xl tracking-widest mb-12 bg-[#FCF4E9] text-[#CC8119] py-4 font-bold">Shop by Categories
    </h1>
    <div class="w-11/12 mx-auto">
        <div class="mt-8 cursor-pointer">
            <ul class="grid capitalize grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 py-4">
                @foreach ($categoryData as $categoryItem)
                    <li
                        class="bg-white p-4 rounded-md shadow-md overflow-hidden transition-transform duration-300 transform hover:scale-105">
                        <img src="{{ $categoryItem['img'] }}" alt="{{ $categoryItem['name'] }}"
                            class="w-full h-32 object-cover mb-2 rounded-md transition-transform duration-300 transform hover:scale-110">
                        <p class="text-sm font-medium tracking-widest ">{{ $categoryItem['name'] }}</p>
                        <p class="text-xs text-gray-500 tracking-widest">{{ $categoryItem['items'] }} items</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
