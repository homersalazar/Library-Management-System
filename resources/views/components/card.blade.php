@props([
    'title' => '',
    'content' => ''
])

<div {{ $attributes->merge(['class' => 'w-full px-4 py-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100']) }}>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $title }}</p>
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $content }}</h5>
    {{ $slot }}
</div>
