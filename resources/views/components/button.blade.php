@props([
    'type' => 'button',
    'variant' => 'green',
    'form' => null,
])

<button
    type="{{ $type }}"
    form="{{ $form }}"
    {{ $attributes->merge(['class' => 'text-white bg-'.$variant.'-700 hover:bg-'.$variant.'-800 focus:ring-2 focus:outline-none focus:ring-'.$variant.'-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-'.$variant.'-600 dark:hover:bg-'.$variant.'-700 dark:focus:ring-'.$variant.'-800']) }}>
    {{ $slot }}
</button>
