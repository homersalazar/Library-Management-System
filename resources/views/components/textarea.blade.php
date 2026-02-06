@props([
    'id'=>'',
    'name'=>'',
    'rows'=> 4,
    'placeholder'=>''
])

<textarea
    id="{{ $id }}"
    name="{{ $name }}"
    rows="{{ $rows }}"
    {{ $attributes->merge([
        'class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500'
    ]) }}
    placeholder="{{ $placeholder }}"
>
    {{ $slot }}
</textarea>
