@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="grid grid-cols-4 gap-4">
            <x-card title="Borrowed Books" content="150" />
            <x-card title="Returned Books" content="250" />
            <x-card title="Overdue Books" content="75" />
            <x-card title="Missing Books" content="10" />

            <x-card title="Total Books" content="150" />
            <x-card title="Visitors" content="250" />
            <x-card title="New Members" content="75" />
            <x-card title="Pending Fees" content="10" />
        </div>
        <div class="flex flex-row gap-4">
            <div class="w-1/2">
                <x-table :headers="['ID', 'Title', 'Author', 'Status']">
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">1</td>
                        <td class="px-3 py-2">The Great Gatsby</td>
                        <td class="px-3 py-2">F. Scott Fitzgerald</td>
                        <td class="px-3 py-2">Borrowed</td>
                    </tr>
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">2</td>
                        <td class="px-3 py-2">1984</td>
                        <td class="px-3 py-2">George Orwell</td>
                        <td class="px-3 py-2">Returned</td>
                    </tr>
                </x-table>
            </div>
            <div class="w-1/2">
                <x-table title="Overdue's History" :headers="['Member ID', 'Title', 'ISBN', 'Due Date', 'Fine']">
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">101</td>
                        <td class="px-3 py-2">John Doe</td>
                        <td class="px-3 py-2">2023-01-15</td>
                        <td class="px-3 py-2">Active</td>
                        <td class="px-3 py-2">Active</td>
                    </tr>
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">102</td>
                        <td class="px-3 py-2">Jane Smith</td>
                        <td class="px-3 py-2">2022-11-20</td>
                        <td class="px-3 py-2">Inactive</td>
                        <td class="px-3 py-2">Inactive</td>
                    </tr>
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">101</td>
                        <td class="px-3 py-2">John Doe</td>
                        <td class="px-3 py-2">2023-01-15</td>
                        <td class="px-3 py-2">Active</td>
                        <td class="px-3 py-2">Active</td>
                    </tr>
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">102</td>
                        <td class="px-3 py-2">Jane Smith</td>
                        <td class="px-3 py-2">2022-11-20</td>
                        <td class="px-3 py-2">Inactive</td>
                        <td class="px-3 py-2">Inactive</td>
                    </tr>
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">101</td>
                        <td class="px-3 py-2">John Doe</td>
                        <td class="px-3 py-2">2023-01-15</td>
                        <td class="px-3 py-2">Active</td>
                        <td class="px-3 py-2">Active</td>
                    </tr>
                </x-table>
            </div>
        </div>
        <div class="flex flex-row gap-4">
            <div class="w-3/4">
                <x-table :headers="['ID', 'Title', 'Author', 'Status']">
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">1</td>
                        <td class="px-3 py-2">The Great Gatsby</td>
                        <td class="px-3 py-2">F. Scott Fitzgerald</td>
                        <td class="px-3 py-2">Borrowed</td>
                    </tr>
                    <tr class="border-b text-gray-700">
                        <td class="px-3 py-2">2</td>
                        <td class="px-3 py-2">1984</td>
                        <td class="px-3 py-2">George Orwell</td>
                        <td class="px-3 py-2">Returned</td>
                    </tr>
                </x-table>
            </div>
            <div class="w-1/4">
                <x-table :headers="['Member ID']">
                    <tr class="border-b">
                        <td class="px-3 py-2">101</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-3 py-2">102</td>
                    </tr>
                </x-table>
            </div>
        </div>
    </div>
@endsection
