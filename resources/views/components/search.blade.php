@props([
    'placeholder' => '',
    'required' => false,
])

<form method="GET" id="searchForm">
    <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <i class="fa-solid fa-magnifying-glass w-4 h-4 text-gray-500 "></i>
        </div>
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            id="searchInput"
            {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 ps-10 p-2.5']) }}
            placeholder="{{ $placeholder }}"
            @if($required) required @endif
        />
    </div>
</form>

<script>
    let timeout = null;
    const input = document.getElementById('searchInput');
    const form = document.getElementById('searchForm');

    input.addEventListener('input', function () {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            form.submit();
        }, 1000); // Adjust delay (ms) as needed
    });
</script>
