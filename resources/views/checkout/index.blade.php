@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-row justify-between items-center w-full mb-5">
            <div class="flex flex-col gap-1 w-full">
                <h1 class="font-semibold text-lg text-green-900">Check-out Books</h1>
            </div>
            <x-search
                placeholder="Search Ex. ISBN, Title, Author, Member, etc"
                class="w-full sm:w-80 md:w-96"
            />
        </div>

        <!-- CHECKOUT BOOK TABLE -->
        <x-table :headers="['Member ID', 'Member', 'Title', 'Author', 'Borrowed Date', 'Return Date', 'Status', 'Action']">
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">1</td>
                <td class="px-3 py-2">The Great Gatsby</td>
                <td class="px-3 py-2">F. Scott Fitzgerald</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
            </tr>
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">2</td>
                <td class="px-3 py-2">1984</td>
                <td class="px-3 py-2">George Orwell</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
            </tr>
        </x-table>

        </div>
    </div>
@endsection
