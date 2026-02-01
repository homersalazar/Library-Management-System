@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-row justify-between items-center w-full mb-5">
            <div class="flex flex-col gap-1 w-full">
                <h1 class="font-semibold text-lg text-green-900">Members</h1>
                <p class="text-gray-700 text-sm">To create a member and view the member report.</p>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <x-search placeholder="Search Member" class="max-w-96" />
                <x-button variant="green" icon="fa-solid fa-user" class="max-w-32">
                    Add Member
                </x-button>
                <x-button variant="gray" icon="fa-solid fa-arrow-up-from-bracket" class="max-w-24">
                    Import
                </x-button>
            </div>
        </div>
        <x-table :headers="['Member ID', 'Member', 'Email', 'Status', 'Role', 'Action']">
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">1</td>
                <td class="px-3 py-2">The Great Gatsby</td>
                <td class="px-3 py-2">F. Scott Fitzgerald</td>
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
            </tr>
        </x-table>
    </div>
@endsection
