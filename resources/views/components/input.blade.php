@props([
    'type' => 'text',
    'name' => '',
    'id' => '',
    'placeholder' => '',
    'required' => false,
])

<input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
    placeholder="{{ $placeholder }}"
    @if($required) required @endif
/>
