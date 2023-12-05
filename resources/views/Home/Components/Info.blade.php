@php
    $info = [
        [
            'id' => 1,
            'icon' => 'fa-truck-fast',
            'service' => 'Free Shipping',
            'detail' => 'Free Shipping for orders over £130 ',
        ],
        [
            'id' => 2,
            'icon' => 'fa-dollar-sign',
            'service' => 'Money Guarantee',
            'detail' => ' Within 30 days for an exchange.  ',
        ],
        [
            'id' => 3,
            'icon' => 'fa-headphones',
            'service' => 'Online Support',
            'detail' => ' 24 hours a day, 7 days a week ',
        ],
        [
            'id' => 4,
            'icon' => 'fa-credit-card',
            'service' => 'Flexible Payment',
            'detail' => ' Pay with Cards and Cash On Delivery',
        ],
    ];
@endphp

<div class="mt-20">
    <hr>
    <div class="grid md:grid-cols-4 grid-cols-2 w-11/12 mx-auto mt-10">
        @forelse ($info as $item)
            <div class="flex items-center gap-6 mx-auto">
                <div class="text-3xl">
                    <i class="fa-solid {{ $item['icon'] }}"></i>
                </div>
                <div>
                    <h1 class="text-lg font-semibold tracking-wider mb-1">{{ $item['service'] }}</h1>
                    <h1 class="text-sm tracking-wider text-gray-600">{{ $item['detail'] }}</h1>
                </div>
            </div>
        @empty
        @endforelse
    </div>

</div>
