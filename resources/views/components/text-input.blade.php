@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-black focus:border-indigo-500 py-2 px-4 focus:ring-indigo-500 rounded-md shadow-sm border tracking-wider',
]) !!}>
