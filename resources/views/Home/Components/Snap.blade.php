@php
    $imageData = [
        [
            'id' => '1',
            'image' => 'https://july.uxper.co/fashion05/wp-content/uploads/sites/6/2023/03/319924333_1325160244886015_4841041216644686203_n.jpg',
        ],
        [
            'id' => '2',
            'image' => 'https://july.uxper.co/fashion05/wp-content/uploads/sites/6/2023/03/315677823_1362557837481932_6593174319359924998_n.jpg',
        ],
        [
            'id' => '3',
            'image' => 'https://july.uxper.co/fashion05/wp-content/uploads/sites/6/2023/03/315651559_664154375170355_9186988138166142169_n.jpg',
        ],
        [
            'id' => '4',
            'image' => 'https://july.uxper.co/fashion05/wp-content/uploads/sites/6/2023/03/315683025_171435502151238_5636215533578007924_n.jpg',
        ],
        [
            'id' => '5',
            'image' => 'https://july.uxper.co/fashion05/wp-content/uploads/sites/6/2023/03/315933407_520263473287747_8621597629894180495_n.jpg',
        ],
    ];
@endphp

<div class="mt-20">
    <h1 class="text-xl tracking-widest capitalize text-center my-10 font-semibold">As styled by you <span
            class="text-[#CC8119]">@Luna
            Bee</span></h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 w-10/12 mx-auto gap-4">
        @forelse ($imageData as $item)
            <div class="overflow-hidden transform transition-transform duration-300 ease-in-out hover:scale-110">
                <img class="w-96 h-60 mx-auto" src="{{ $item['image'] }}" alt="">
            </div>
        @empty
        @endforelse
    </div>

</div>
