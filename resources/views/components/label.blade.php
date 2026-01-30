@props([
    'for',
    'variant' => 'gray'
])

<label
    for="{{ $for }}"
    {{ $attributes->merge(['class' => 'block text-sm font-medium text-'.$variant.'-900']) }}
>
    {{ $slot }}
</label>
