@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-5">

            <!-- Left: Title -->
            <div class="flex flex-col gap-1">
                <h1 class="font-semibold text-lg text-green-900">Members</h1>
                <p class="text-gray-700 text-sm">
                    To create a member and view the member report.
                </p>
            </div>

            <!-- Right: Search + Buttons -->
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto md:justify-end">
                <x-search
                    placeholder="Search Member"
                    class="w-full sm:w-64"
                />

                <x-button
                    variant="green"
                    icon="fa-solid fa-user"
                    class="w-full sm:w-auto"
                    data-modal-target="createModal"
                    data-modal-toggle="createModal"
                >
                    Add Member
                </x-button>

                <x-button
                    variant="gray"
                    icon="fa-solid fa-arrow-up-from-bracket"
                    class="w-full sm:w-auto"
                >
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

    <x-modal id="createModal" title="Create User" :buttons="[
        ['label'=>'Create','type'=>'submit','color'=>'bg-green-600','form'=>'createForm']
    ]">
        <form id="createForm">
            <!-- form fields -->
        </form>
    </x-modal>
@endsection
