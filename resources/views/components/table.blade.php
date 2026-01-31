@props([
    'title' => '',
    'headers' => []
])

<div class="flex flex-col bg-white rounded-lg shadow-lg">
    <h1 class="font-semibold text-lg px-3 py-1">{{ $title }}</h1>
    <div class="relative overflow-x-auto overflow-y-hidden w-full">
        <table class="w-full text-sm" style="text-align: left !important;">
            <thead class="text-xs">
                <tr class="border-b-2">
                    @foreach ($headers as $header)
                        <th class="px-3 py-2">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
