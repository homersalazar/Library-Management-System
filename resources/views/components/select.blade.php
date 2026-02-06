@props([
    'id' => '',
    'label' => '',
    'name' => '',
    'onchange' => '',
    'required' => false,
    'multiple' => false,
])

<select

    id="{{ $id ?: $name }}"
    name="{{ $name }}"
    onchange="{{ $onchange }}"
    @if($required) required @endif
    @if($multiple) multiple @endif
    {{ $attributes->merge([
        'class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5'
    ]) }}
>
    <option value="" disabled selected>{{ $label }}</option>
    {{ $slot }}
</select>
