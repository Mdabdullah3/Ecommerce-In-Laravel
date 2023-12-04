<div class="my-16">
    <div class="w-10/12 mx-auto">
        <div>
            <h1 class="text-xl font-semibold tracking-widest">Season Collection</h1>
        </div>
        <div class="mt-8 cursor-pointer">
            <ul class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach($categoryData as $categoryItem)
                <li class="bg-white p-4 rounded-md shadow-md overflow-hidden transition-transform duration-300 transform hover:scale-105">
                    <img src="{{ $categoryItem['img'] }}" alt="{{ $categoryItem['name'] }}" class="w-full h-32 object-cover mb-2 rounded-md transition-transform duration-300 transform hover:scale-110">
                    <p class="text-sm font-medium tracking-wider">{{ $categoryItem['name'] }}</p>
                    <p class="text-xs text-gray-500">{{ $categoryItem['items'] }} items</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>