@props([
    'id' => '',
    'variant' => 'gray',
    'required' => false,
])

<input
    id="{{ $id }}"
    type="checkbox"
    {{ $attributes->merge(['class' => 'w-4 h-4 border-2 border-'.$variant.'-600 rounded-sm']) }}
    @if($required) required @endif
/>
