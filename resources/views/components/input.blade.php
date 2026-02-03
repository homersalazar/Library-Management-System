@props([
    'type' => 'text',
    'name' => '',
    'id' => '',
    'placeholder' => '',
    'required' => false,
    'value' => '',
])

<input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5']) }}
    placeholder="{{ $placeholder }}"
    @if($required) required @endif
/>
